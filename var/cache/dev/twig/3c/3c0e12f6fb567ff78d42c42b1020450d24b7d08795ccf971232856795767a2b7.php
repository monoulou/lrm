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
        $__internal_02127c9f2a954d1a14f45b60eaabf922e23647cc3adc151eb5b0c1fcb14a3b35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02127c9f2a954d1a14f45b60eaabf922e23647cc3adc151eb5b0c1fcb14a3b35->enter($__internal_02127c9f2a954d1a14f45b60eaabf922e23647cc3adc151eb5b0c1fcb14a3b35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_1fcf099b762d5fa6d01bc0e1e8915ba28e1e8ea5b605fa54e06aadc1a7db8c3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fcf099b762d5fa6d01bc0e1e8915ba28e1e8ea5b605fa54e06aadc1a7db8c3e->enter($__internal_1fcf099b762d5fa6d01bc0e1e8915ba28e1e8ea5b605fa54e06aadc1a7db8c3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

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
        
        $__internal_02127c9f2a954d1a14f45b60eaabf922e23647cc3adc151eb5b0c1fcb14a3b35->leave($__internal_02127c9f2a954d1a14f45b60eaabf922e23647cc3adc151eb5b0c1fcb14a3b35_prof);

        
        $__internal_1fcf099b762d5fa6d01bc0e1e8915ba28e1e8ea5b605fa54e06aadc1a7db8c3e->leave($__internal_1fcf099b762d5fa6d01bc0e1e8915ba28e1e8ea5b605fa54e06aadc1a7db8c3e_prof);

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
