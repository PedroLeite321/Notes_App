const getUrl = (() =>    {
    if(window.location == "http://localhost:8000/functions/modalControl/createNote.php"){
        document.getElementById("success").textContent = "All done, wait a few seconds";
        const PrepareGoBack = () =>   {
            const goBack = () =>{
                location.replace("http://localhost:8000/");
            }
            setTimeout(goBack, 2000);
        }
        PrepareGoBack();

    }else{
        location.replace("http://localhost:8000/Error");
    }
})();