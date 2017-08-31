<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_27b27e762efab688d227d03cc68b43e9f4dc0eb123f91d8a1fbefc869b894c60 extends Twig_Template
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
        $__internal_ff814396082496b99a8d4a2a52a8ffe922a48e66456771aef37071f8db880bec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff814396082496b99a8d4a2a52a8ffe922a48e66456771aef37071f8db880bec->enter($__internal_ff814396082496b99a8d4a2a52a8ffe922a48e66456771aef37071f8db880bec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_557e660dfd9fb759327ebbb24568bf7cd9242695a62b38990e7ca7782567a268 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_557e660dfd9fb759327ebbb24568bf7cd9242695a62b38990e7ca7782567a268->enter($__internal_557e660dfd9fb759327ebbb24568bf7cd9242695a62b38990e7ca7782567a268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_ff814396082496b99a8d4a2a52a8ffe922a48e66456771aef37071f8db880bec->leave($__internal_ff814396082496b99a8d4a2a52a8ffe922a48e66456771aef37071f8db880bec_prof);

        
        $__internal_557e660dfd9fb759327ebbb24568bf7cd9242695a62b38990e7ca7782567a268->leave($__internal_557e660dfd9fb759327ebbb24568bf7cd9242695a62b38990e7ca7782567a268_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_attributes.html.php");
    }
}
