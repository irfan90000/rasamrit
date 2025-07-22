$(function () {
    "use strict";
    $(".mobile-toggle-menu").on("click", function () {
        $(".wrapper").addClass("toggled");
    }),
        $(".toggle-icon").click(function () {
            $(".wrapper").hasClass("toggled")
                ? ($(".wrapper").removeClass("toggled"),
                  $(".sidebar-wrapper").unbind("hover"))
                : ($(".wrapper").addClass("toggled"),
                  $(".sidebar-wrapper").hover(
                      function () {
                          $(".wrapper").addClass("sidebar-hovered");
                      },
                      function () {
                          $(".wrapper").removeClass("sidebar-hovered");
                      }
                  ));
        }),
        $(document).ready(function () {
            $(window).on("scroll", function () {
                $(this).scrollTop() > 300
                    ? $(".back-to-top").fadeIn()
                    : $(".back-to-top").fadeOut();
            }),
                $(".back-to-top").on("click", function () {
                    return (
                        $("html, body").animate(
                            {
                                scrollTop: 0,
                            },
                            600
                        ),
                        !1
                    );
                });
        });
});
