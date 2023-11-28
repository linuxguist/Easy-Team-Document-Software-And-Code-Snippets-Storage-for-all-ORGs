<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'editors/signature.tpl', 3, false),)), $this); ?>
<div class="signature-pad">
    <canvas width="<?php echo $this->_tpl_vars['Editor']->getDrawAreaWidth(); ?>
" height="<?php echo $this->_tpl_vars['Editor']->getDrawAreaHeight(); ?>
"></canvas>
    <input type="hidden" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['Editor']->GetValue())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"
        data-pen-color="<?php echo $this->_tpl_vars['Editor']->getPenColor(); ?>
"
        data-background-color="<?php echo $this->_tpl_vars['Editor']->getBackgroundColor(); ?>
"
        data-format-for-saving="<?php echo $this->_tpl_vars['Editor']->getFormatForSaving(); ?>
"
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "editors/editor_options.tpl", 'smarty_include_vars' => array('Editor' => $this->_tpl_vars['Editor'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    />
    <div class="btn-toolbar">
        <button class="btn btn-default" data-action="clear"><?php echo $this->_tpl_vars['Captions']->GetMessageString('Clear'); ?>
</button>
        <button class="btn btn-default" data-action="undo" disabled="disabled"><?php echo $this->_tpl_vars['Captions']->GetMessageString('Undo'); ?>
</button>
    </div>
</div>