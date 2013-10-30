<form class="form-horizontal">
    <fieldset>

        <!-- Form Name -->
        <legend>产品</legend>

        <!-- Text input-->
        <div class="control-group">
            <label class="control-label" for="name">名称</label>
            <div class="controls">
                <input id="name" name="name" type="text" placeholder="请输入产品名称" class="input-xlarge" required="">

            </div>
        </div>

        <!-- Textarea -->
        <div class="control-group">
            <label class="control-label" for="textarea">描述</label>
            <div class="controls">                     
                <textarea id="textarea" name="textarea"></textarea>
            </div>
        </div>

        <!-- Select Basic -->
        <div class="control-group">
            <label class="control-label" for="selectbasic">分类</label>
            <div class="controls">
                <select id="selectbasic" name="selectbasic" class="input-xlarge">
                    <option>分类1</option>
                    <option>分类2</option>
                </select>
            </div>
        </div>

        <!-- Multiple Radios (inline) -->
        <div class="control-group">
            <label class="control-label" for="radios">状态</label>
            <div class="controls">
                <label class="radio inline" for="radios-0">
                    <input type="radio" name="radios" id="radios-0" value="显示" checked="checked">
                    显示
                </label>
                <label class="radio inline" for="radios-1">
                    <input type="radio" name="radios" id="radios-1" value="关闭">
                    关闭
                </label>
            </div>
        </div>

        <!-- Button (Double) -->
        <div class="control-group">
            <label class="control-label" for="button1id"></label>
            <div class="controls">
                <button id="button1id" name="button1id" class="btn btn-primary">保存</button>
                <button id="button2id" name="button2id" class="btn btn-inverse">取消</button>
            </div>
        </div>
    </fieldset>
</form>
