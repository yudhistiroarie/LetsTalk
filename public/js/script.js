bsCustomFileInput.init()

$("input[data-bootstrap-switch]").each(function() {
    $(this).bootstrapSwitch('state', $(this).prop('checked'))
})

/* datetime picker */
    /* date */
    $(".datetime").datetimepicker({
        format: 'DD-MM-YYYY',
        useCurrent: false,
        sideBySide: true,
        icons: {
            next: "fas fa-chevron-right",
            previous: "fas fa-chevron-left",
        },
        // debug: true,
    })
    .prop("autocomplete", "off")
    
    /* year */
    $(".year").datetimepicker({
        format: "YYYY",
        viewMode: "years",
        useCurrent: false,
        sideBySide: true,
        icons: {
            next: "fas fa-chevron-right",
            previous: "fas fa-chevron-left",
        },
        // debug: true,
    })
    .prop("autocomplete", "off")

/* delay */
function makeDelay(ms) {
    var timer = 0;
    
    return function(callback) {
        clearTimeout(timer);
        timer = setTimeout(callback, ms);
    };
};

/* plat nomor */
$(".plat").inputmask("A[A]-9[9{0,3}][-A{1,3}]")

/* price format */
_price_format()
function _price_format()
{
    if($("[class*=priceformat]").length === 0) {
        return false
    }
    
    $.each($(".priceformat"), function() {
        $t = $(this)
        
        if(!$t.val()) {
            $t.val(0)
        }
    })
    
    $("[class*=priceformat]")
    .priceFormat({
        prefix              : "",
        thousandsSeparator  : ",",
        // centsSeparator      : ".",
        centsLimit          : 0,
        allowNegative       : true,
    })
    .off("mouseup keydown change")
    .on ("mouseup keydown change", function()
    {
        pointer_position = $(this).val().length
        this.selectionStart = this.selectionEnd = pointer_position
    })
}

/* select2 */
function preSelect($elem, value)
{
    $elem
        .select2()
        .val(value)
        .trigger("change")
}

$(".select2").select2({
    minimumResultsForSearch: 6,
    theme: "bootstrap4",
})

$(".select2-multiple").select2({
    // minimumResultsForSearch: 6,
    multiple: true,
    theme: "bootstrap4",
})