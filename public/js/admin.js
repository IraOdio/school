window.addEventListener('load',function () {
    let arInclude = document.querySelectorAll('.button-include');
    for(let i = 0; i< arInclude.length;i++){
        arInclude[i].addEventListener('click',function(){
            let text = $(this).prev().text();
            let path = $(this).attr('data-path');
            $.post({
                url: "ajaxQuery/templateEditArea.php", // адрес, на который будет отправлен запрос
                data:{editText:text,editPath:path},
                success: function(data,status){ // если запрос успешен вызываем функцию
                    $('.jsAjaxAfter').after(data);
                    saveEdit();
                    cancelEdit();
                }
            });
        });
    }
    function saveEdit(){
        $("#saveEditAreaSub").click(function(e){
            e.preventDefault();
            let text = $("#textEditArea").val();
            let path = $("#pathEditArea").val();
            $.post({
                url: "ajaxQuery/saveEditedArea.php", // адрес, на который будет отправлен запрос
                data:{editText:text,editPath:path},
                success: function(data,status){ // если запрос успешен вызываем функцию
                    if(status==="success"){
                        alert("Файл был успешно перезаписан");
                        //alert(data);
                        let editWrapper = document.getElementById('editAreaWrapper');
                        editWrapper.remove();
                        window.location.replace("/info");
                    }
                }
            });
        });
    }
    function cancelEdit(){
        let cancel = document.getElementById('cancelEditArea');
        let editWrapper = document.getElementById('editAreaWrapper');
        cancel.onclick = function () {
            editWrapper.remove();
        };
    }
});