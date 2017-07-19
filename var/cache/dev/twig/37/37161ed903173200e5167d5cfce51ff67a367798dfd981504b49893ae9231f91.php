<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_d318a6d3a25ad5611b7949c4a5c97d06d9e5ca197281cf1d3295c6661bfbf177 extends Twig_Template
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
        $__internal_f748398fae23cf16451971327afc52956efaa52c25de8742229ebd2e03eb72bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f748398fae23cf16451971327afc52956efaa52c25de8742229ebd2e03eb72bd->enter($__internal_f748398fae23cf16451971327afc52956efaa52c25de8742229ebd2e03eb72bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_dbfd2dc2dd03d73d1007474843b6d20931c39b84bbb5fc97444712d247ea36cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbfd2dc2dd03d73d1007474843b6d20931c39b84bbb5fc97444712d247ea36cd->enter($__internal_dbfd2dc2dd03d73d1007474843b6d20931c39b84bbb5fc97444712d247ea36cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_f748398fae23cf16451971327afc52956efaa52c25de8742229ebd2e03eb72bd->leave($__internal_f748398fae23cf16451971327afc52956efaa52c25de8742229ebd2e03eb72bd_prof);

        
        $__internal_dbfd2dc2dd03d73d1007474843b6d20931c39b84bbb5fc97444712d247ea36cd->leave($__internal_dbfd2dc2dd03d73d1007474843b6d20931c39b84bbb5fc97444712d247ea36cd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
