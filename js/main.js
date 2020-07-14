$(document).ready(function() {
    $('#form-main-menu').delegate('.checkbox-menu', 'change', function () {
        // From the other examples
        if (this.checked) {
            
            alert(this.value + " Checked!");
        }
    });
});