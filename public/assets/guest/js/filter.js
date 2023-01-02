$('.selec-filter').change(function (){
    console.log($(this).val());

    window.location.replace(['?filter=' + $(this).val()]);
});