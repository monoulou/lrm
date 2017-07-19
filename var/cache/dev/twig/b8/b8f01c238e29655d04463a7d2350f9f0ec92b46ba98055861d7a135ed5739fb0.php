<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_09fe1b9ab03fd54edfb0782d48c6c23a7c18031226febb23c9122ca2684d37e5 extends Twig_Template
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
        $__internal_bd28ce749265c4e1f7317eb458c7268ccef70562ac8f89a96f360a4962de1347 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd28ce749265c4e1f7317eb458c7268ccef70562ac8f89a96f360a4962de1347->enter($__internal_bd28ce749265c4e1f7317eb458c7268ccef70562ac8f89a96f360a4962de1347_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_36828118d4b4ba8a535d45865ffe0d11c191d605dc450d6d01346d8455bd84db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36828118d4b4ba8a535d45865ffe0d11c191d605dc450d6d01346d8455bd84db->enter($__internal_36828118d4b4ba8a535d45865ffe0d11c191d605dc450d6d01346d8455bd84db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_bd28ce749265c4e1f7317eb458c7268ccef70562ac8f89a96f360a4962de1347->leave($__internal_bd28ce749265c4e1f7317eb458c7268ccef70562ac8f89a96f360a4962de1347_prof);

        
        $__internal_36828118d4b4ba8a535d45865ffe0d11c191d605dc450d6d01346d8455bd84db->leave($__internal_36828118d4b4ba8a535d45865ffe0d11c191d605dc450d6d01346d8455bd84db_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}
