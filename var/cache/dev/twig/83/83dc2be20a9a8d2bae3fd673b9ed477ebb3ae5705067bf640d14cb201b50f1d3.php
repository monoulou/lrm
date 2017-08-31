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
        $__internal_c58cbc796791dc08ccb1ade8023a34b9d5ffbbc5396b003824ff8d1cfa2d8d40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c58cbc796791dc08ccb1ade8023a34b9d5ffbbc5396b003824ff8d1cfa2d8d40->enter($__internal_c58cbc796791dc08ccb1ade8023a34b9d5ffbbc5396b003824ff8d1cfa2d8d40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_8050884d5141db7f70153c2d49aed56134fa1f1d3e7ab588648aacc3d88a7bad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8050884d5141db7f70153c2d49aed56134fa1f1d3e7ab588648aacc3d88a7bad->enter($__internal_8050884d5141db7f70153c2d49aed56134fa1f1d3e7ab588648aacc3d88a7bad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_c58cbc796791dc08ccb1ade8023a34b9d5ffbbc5396b003824ff8d1cfa2d8d40->leave($__internal_c58cbc796791dc08ccb1ade8023a34b9d5ffbbc5396b003824ff8d1cfa2d8d40_prof);

        
        $__internal_8050884d5141db7f70153c2d49aed56134fa1f1d3e7ab588648aacc3d88a7bad->leave($__internal_8050884d5141db7f70153c2d49aed56134fa1f1d3e7ab588648aacc3d88a7bad_prof);

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
