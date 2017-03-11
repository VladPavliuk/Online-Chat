<div id="messages-list">
    {foreach from=$messagesList item=message}
        <div class="row">
            <div class="message-item" id="{$message["id"]}">
                <span class="label primary">{$message["nick"]}</span>
                <span class="label secondary">{$message["postTime"]}</span>
                <br>
                <p>{$message["message"]}</p>
                <hr>
            </div>
        </div>
    {/foreach}
</div>
<div class="row">
    <div class="column medium-4 medium-offset-5">
        <button onclick="loadMoreMessages()" class="button success tiny">
            Більше повідомлень...
        </button>
    </div>
</div>