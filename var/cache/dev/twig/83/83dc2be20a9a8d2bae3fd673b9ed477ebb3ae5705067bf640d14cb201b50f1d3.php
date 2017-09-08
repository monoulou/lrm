<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_507dd341f8e8b5e7c7a221365485a5c276dd8bbd8a3add114375fe4039492668 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ae28d83bfe66fb480fe42a8bea027a62e3c72192baef31f10c9bf83173a789e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae28d83bfe66fb480fe42a8bea027a62e3c72192baef31f10c9bf83173a789e4->enter($__internal_ae28d83bfe66fb480fe42a8bea027a62e3c72192baef31f10c9bf83173a789e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_ee0b95cfd34fdbfa3aa8d44dc0e120ad111bc8d538d40b34c1fa83fc1bad7a2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee0b95cfd34fdbfa3aa8d44dc0e120ad111bc8d538d40b34c1fa83fc1bad7a2a->enter($__internal_ee0b95cfd34fdbfa3aa8d44dc0e120ad111bc8d538d40b34c1fa83fc1bad7a2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_ae28d83bfe66fb480fe42a8bea027a62e3c72192baef31f10c9bf83173a789e4->leave($__internal_ae28d83bfe66fb480fe42a8bea027a62e3c72192baef31f10c9bf83173a789e4_prof);

        
        $__internal_ee0b95cfd34fdbfa3aa8d44dc0e120ad111bc8d538d40b34c1fa83fc1bad7a2a->leave($__internal_ee0b95cfd34fdbfa3aa8d44dc0e120ad111bc8d538d40b34c1fa83fc1bad7a2a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_widget.html.php");
    }
}
