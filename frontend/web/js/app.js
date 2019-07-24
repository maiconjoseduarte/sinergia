
(function () {
    jQuery('table .dropdown').on("show.bs.dropdown", function (event) {
        jQuery('.table-responsive').css('overflow', 'visible');
    });

    jQuery('table .dropdown').on("hide.bs.dropdown", function (event) {
        jQuery('.table-responsive').css('overflow', 'auto');
    });
})();