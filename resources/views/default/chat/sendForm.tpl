<form>
    <div class="row">
        <div class="medium-12 columns">
            <label>
                Скажи щось...
                <textarea id="message" maxlength="255" cols="30" rows="3"
                          placeholder="...Я люблю малесенькі кицькі..."></textarea>
            </label>
        </div>
    </div>

    <div class="row align-middle">

        <div class="medium-6 columns ">

            <input onclick="sendMessage()"
                   type="reset" value="Сказати" class="send success button large">

        </div>
        <div class="medium-6 columns">
            <label>Твій нікнейм <em>(необов'язково)</em>
                <input id="nickname" type="text"
                       onkeydown="if (event.keyCode == 13) return false;" aria-describedby="nameHelpText">
            </label>
        </div>

    </div>
</form>
<div class="row">
    <hr>
</div>
{include file="chat/messagesList.tpl"}
