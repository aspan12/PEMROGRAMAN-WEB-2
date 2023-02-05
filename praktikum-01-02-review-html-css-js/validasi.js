function validasi()
{
    let txtKataKunci = document.getElementById("txtKataKunci");
    if (txtKataKunci.value == "")
    {
        alert("Anda harus mengisi textbox ndengan sembarang kata");
    }
    else
    {
        alert("Anda ingin mencari dengan kata kunci = "+txtKataKunci.value);
    }
}