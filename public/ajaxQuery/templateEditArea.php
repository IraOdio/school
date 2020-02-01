<div id="editAreaWrapper" class="editAreaWrapper">
    <form id="editArea" class="editArea">
        <textarea id="textEditArea" name="textEditArea" class="textEditArea" >
            <?= $_POST['editText'] ?>
        </textarea>
        <input type="hidden" id="pathEditArea" name="pathEditArea" value="<?=$_POST['editPath'] ?>">
        <button type="submit" id="saveEditAreaSub" name="saveEditAreaSub" class="saveEditArea">Сохранить</button>
        <button id="cancelEditArea" class="cancelEditArea">Отменить</button>
    </form>
</div>
<script>

</script>