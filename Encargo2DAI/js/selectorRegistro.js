function ChangeRedirectPage() {
    var selectedValue = $("#slcTipo").val();
    if (selectedValue === "slcEmpresa")
    {
        $("#frmRegistro").attr("action", "registroEmpresa.php");
    }
    else
    {
        $("#frmRegistro").attr("action", "registroParticular.php");
    }
}