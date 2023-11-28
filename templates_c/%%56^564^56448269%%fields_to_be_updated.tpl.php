<div class="row">
    <div id="form-group-fields-to-be-updated" class="form-group">
        <div class="form-group-label <?php if ($this->_tpl_vars['Grid']['FormLayout']->isHorizontal()): ?>col-sm-3<?php else: ?>col-sm-12<?php endif; ?>">
            <label class="control-label" for="fields-to-be-updated">
                <?php echo $this->_tpl_vars['Captions']->GetMessageString('FieldsToBeUpdated'); ?>

            </label>
        </div>
        <div class="<?php if ($this->_tpl_vars['Grid']['FormLayout']->isHorizontal()): ?>col-sm-9<?php else: ?>col-sm-12<?php endif; ?>">
            <div class="input-group">
                <div class="col-input" style="width:100%;max-width:100%">
                    <select id="fields-to-be-updated" name="fields_to_be_updated_edit[]" class="form-control" multiple data-editor="multivalue_select">
                        <?php $_from = $this->_tpl_vars['Grid']['MultiEditColumns']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['column']):
?>
                        <option value="<?php echo $this->_tpl_vars['column']->GetName(); ?>
"<?php if ($this->_tpl_vars['Grid']['AllFieldsToBeUpdatedByDefault']): ?> selected<?php endif; ?>><?php echo $this->_tpl_vars['column']->GetCaption(); ?>
</option>
                        <?php endforeach; endif; unset($_from); ?>
                    </select>
                </div>
                <span id="clear-fields-to-be-updated" class="input-group-addon" title="<?php echo $this->_tpl_vars['Captions']->GetMessageString('ClearFieldsToBeUpdated'); ?>
">
                    <span class="icon-remove"></span>
                </span>
            </div>
        </div>
        <div class="col-sm-12">
            <hr>
        </div>
    </div>
</div>