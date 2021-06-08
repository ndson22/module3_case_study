// Thay đổi thông tin huyện xã tương ứng khi tạo restaurant
$(document).ready(function () {
    $('#city').change( function (event) {
        event.preventDefault();
        let cityId = $('#city').val();
        $.ajax({
            url: '/collaborators/restaurants/districts/' + cityId,
            method: 'GET',
            success: function(data) {
                $('#district option').remove();
                $('#district').append($('<option>', {
                    value: '0',
                    text: '--Select your district--'
                }));
                $.each(data.districts, function (key, district) {
                    $('#district').append($('<option>', {
                        value: district.id,
                        text: district.district_name,
                    }))
                });
            }
        });
    })

    $('#district').change( function () {
        let district_id = $('#district').val();
        $.ajax({
            url: '/collaborators/restaurants/communes/' + district_id,
            method: 'GET',
            success: function (data) {
                $('#commune option').remove();
                $('#commune').append($('<option>', {
                    value: '0',
                    text: '--Select your commune--'
                }))
                $.each(data.communes, function (key, commune) {
                    $('#commune').append($('<option>', {
                        value: commune.id,
                        text: commune.commune_name,
                    }))
                })
            }
        });
    })

    // Select2 chọn nhiều tag
    $("#tags").select2({
        tags: true,
        tokenSeparators: [' ']
      });
    $("#editTags").select2({
        tags: true,
        tokenSeparators: [' '],
        dropdownParent: $("#editModal")
    });

      // Thay đổi thông tin nhà hàng khi thêm mới món ăn
    $('#restaurant_id').change( function () {
        let restaurant_id = $('#restaurant_id').val();
        $.ajax({
            url: '/collaborators/restaurants/' + restaurant_id + '/1',
            type: 'get',
            success: function (data) {
                // console.log(data.restaurant.city.city_name);
                console.log(data);
                // console.log(data.restaurant.image);
                // $('#restaurant_image').attr('src') = '/storage/' + data.restaurant.image;
                $('#restaurant_name').val(data.restaurant.name);
                $('#restaurant_openTime').val(data.restaurant.open_time);
                $('#restaurant_closeTime').val(data.restaurant.close_time);
                $('#restaurant_address').val(data.restaurant.address);
                $('#restaurant_city').val(data.restaurant.city.city_name);
                $('#restaurant_district').val(data.restaurant.district.district_name);
                $('#restaurant_commune').val(data.restaurant.commune.commune_name);
            },
            error: function () {
                $('#restaurant_name').val('');
                $('#restaurant_openTime').val('');
                $('#restaurant_closeTime').val("");
                $('#restaurant_address').val("");
                $('#restaurant_city').val("");
                $('#restaurant_district').val("");
                $('#restaurant_commune').val("");
            }
        });
    });
    
    $(".restaurants_info").click(function () {
        $.ajax ({
            url: '/collaborators/restaurants/' + $(this).attr('name') + '/1',
            type: "GET",
            success: function (data) {
                // console.log(data);
                // Thay đổi thông tin của nhà hàng theo restaurant_id
                $("#restaurant_info").find(".restaurant-name").html(data.restaurant.name);
                $("#restaurant_info").find(".restaurant-open-time").html(data.restaurant.open_time + " - " + data.restaurant.close_time);
                $("#restaurant_info").find(".restaurant-city").html(data.restaurant.city.city_name);
                $("#restaurant_info").find(".restaurant-district").html(data.restaurant.district.district_name);
                $("#restaurant_info").find(".restaurant-commune").html(data.restaurant.commune.commune_name);
                $("#restaurantImg").attr("src", "http://127.0.0.1:8000/storage/" + data.restaurant.image);
                $('#custom-pagination').data('restaurant-id', data.restaurant.id); // phục vụ thay đổi trang

                // Thay đổi thông tin của món ăn theo nhà hàng tương ứng

                updateListOfFoods (data); // Thêm lại thông tin mới
                paginate(data);
            },
            error: function (data) {

            },
        });
    });

    function paginate (data) {
        let pagination = []; // Hiển thị số trang
        // Thêm sô trang tương ứng với số lượng món ăn. 5 món/trang
        $('#custom-pagination').empty();
        // previous button
        pagination.push('<li class="page-item"><a class="page-link -2" aria-label="Previous" id="previous"> <span aria-hidden="true">&laquo;</span><span class="sr-only" >Previous</span></a></li>');

        let foodPerPage = 5;
        let numberOfPage = Math.ceil(data.restaurant.amount/foodPerPage);
        for (let i = 1; i <= numberOfPage; i ++) {
            if (i == 1) {
                pagination.push('<li class="page-item active"><a class="page-link ' + i + '" id="' + i + '">' + i + '</a></li>')
            } else {
                pagination.push('<li class="page-item"><a class="page-link ' + i + '" id="' + i + '">' + i + '</a></li>')
            }
        };
        // next button
        pagination.push('<li class="page-item" ><a class="page-link -1" aria-label="Next" id="next"> <span aria-hidden="true">&raquo;</span><span class="sr-only">Next</span></a></li>');
        // Hiển thị thông tin food ra
        $('#custom-pagination').append(pagination.join(""));
    }

    // Hover vào page thì chuyển trỏ chuột thành hình bàn tay
    $('#custom-pagination').hover(function () {
        $(this).css('cursor', 'pointer');
    });

    // Chọn và chuyển trang trong danh sách món ăn
    $('#custom-pagination').click(function (event) {
        let restaurant_id = $(this).data('restaurant-id');
        // Tim tong so trang
        let classes = $(this).find('a');
        let pageClass = [];
        $.each(classes, function (i, obj) {
            pageClass.push(parseInt(obj.classList[1]));
        });
        let max = Math.max.apply(Math, pageClass);
        let targetClass = event.target.classList[1];
        let targetPage = targetClass;
        let current = $(this).find('.active');
        let currentPage = parseInt(current.children().attr('class').split(/\s+/)[1]);

        if (targetClass == '-2') { // previous
            if (currentPage == '1') {
                targetPage = currentPage;
            } else {
                targetPage = currentPage - 1;
            };
        } else if (targetClass == '-1') { // next
            if (currentPage == max) {
                targetPage = currentPage;
                // console.log(targetPage);
            } else {
                targetPage = currentPage + 1;
                console.log(targetPage);
            };
        } else {
            targetPage = targetClass;
        }
        // console.log(targetPage);
        $(this).find('li').removeClass('active');
        $(this).find('.' + targetPage).parent().addClass('active');
        if (targetPage != currentPage) {
            $.ajax({
                url: '/collaborators/restaurants/' + restaurant_id + '/' + targetPage,
                type: 'GET',
                success: function (data) {
                    updateListOfFoods (data)
                },
                error: function () {
                    $(".food-list").empty(); // Xóa toàn bộ thông tin hiện tại
                    $(".food-list").append('<p class="text-warning">Something wrong! Please reload and try again</p>')
                },
            });
        };

        // scroll đến id chỉ định
        $([document.documentElement, document.body]).animate({
            scrollTop: $("#restaurantImg").offset().top
        }, 500);
    });

    // delete food
    function actionDelete(event){
        event.preventDefault();
        let page = $('#custom-pagination').find('.active').children().attr('id');
        let urlRequest = "/collaborators/foods/delete/" + event.target.getAttribute('data-food-id') + "/" + page;
        let that = $(this);
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: 'GET',
                        url: urlRequest,
                        async: true,
                        success: function (data) {
                            if(data.code==200){
                                that.parent().parent().remove();
                                Swal.fire(
                                    'Deleted!',
                                    'Your file has been deleted.',
                                    'success'
                                )
                            }        
                            updateListOfFoods (data);
                        },
                        error: function (data) {
        
                        }
                    });
                }
            })
    }
       
    $('#foodEditForm').submit(function () {
        var formData = new FormData(this);
        $.ajax({
            type:'POST',
            url: '/collaborators/foods/update/' + $(this).attr('data-food-id'),
            data: formData,
            cache:false,
            contentType: false,
            processData: false,
            success: function (response) {
                let foodContainer = $('.food-list').find('.' + response.food.id);
                let listTag = [];
                $.each(response.food.tags, function (i, tag) {
                    listTag.push('<span>#' + tag.tag_name + '</span> ');
                });
                let foodImageHtml = '<img src="' + "http://127.0.0.1:8000/storage/" + response.food.image + '" class="img-fluid" alt="food image" >'
                foodContainer.find('#list_tags').empty();
                foodContainer.find('#food_img').find('img').remove();
                foodContainer.find('#food_img').find('a').append(foodImageHtml);
                foodContainer.find('#food_name').html(response.food.name);
                foodContainer.find('#food_category').html(response.food.categories.category_name);
                foodContainer.find('#food_price').html(response.food.price + " VND");
                foodContainer.find('#food_sale_price').html(response.food.sale_price + " VND");
                foodContainer.find('#prepare_food').html(response.food.prepare_food + " minutes");
                foodContainer.find('#list_tags').html(listTag.join(""));

                // thong bao thanh cong
                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: 'Update food successfully!',
                    showConfirmButton: false,
                    timer: 1000
                  })
            },
            error: function (error) {
                console.log(error);
            }
        });
    });

});


