/* global wp, jQuery */
/**
 * File customizer.js.
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

(function ($) {
    // Site title and description.
    wp.customize("blogname", function (value) {
        value.bind(function (to) {
            $(".site-title a").text(to);
        });
    });
    wp.customize("blogdescription", function (value) {
        value.bind(function (to) {
            $(".site-description").text(to);
        });
    });

    // Header text color.
    wp.customize("header_textcolor", function (value) {
        value.bind(function (to) {
            if ("blank" === to) {
                $(".site-title, .site-description").css({
                    clip: "rect(1px, 1px, 1px, 1px)",
                    position: "absolute",
                });
            } else {
                $(".site-title, .site-description").css({
                    clip: "auto",
                    position: "relative",
                });
                $(".site-title a, .site-description").css({
                    color: to,
                });
            }
        });
    });

    // Header Logo
    wp.customize("logo_option", function (value) {
        value.bind(function (to) {
            $(".logo").attr("src", to);
        });
    });

    wp.customize("phone_number", function (value) {
        value.bind(function (to) {
            $(".header-info .phone").text(to);
        });
    });

    wp.customize("call_to_action", function (value) {
        value.bind(function (to) {
            $(".header-info .contact-btn").text(to);
        });
    });

    wp.customize("call_to_action_visibility", function (value) {
        value.bind(function (to) {
            true === to ? $(".header-info").show() : $(".header-info").hide();
        });
    });
})(jQuery);
