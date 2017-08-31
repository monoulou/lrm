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
        $__internal_dfc036f6b17eed7efa00de71b250d9182c8e35818d8b8b5118e5cf03c2709d48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfc036f6b17eed7efa00de71b250d9182c8e35818d8b8b5118e5cf03c2709d48->enter($__internal_dfc036f6b17eed7efa00de71b250d9182c8e35818d8b8b5118e5cf03c2709d48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_d8f89c8ac4b4330281f5b67dc6e1b0b908cc59d4b89fb3e4bb136cc6dd3a69b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8f89c8ac4b4330281f5b67dc6e1b0b908cc59d4b89fb3e4bb136cc6dd3a69b2->enter($__internal_d8f89c8ac4b4330281f5b67dc6e1b0b908cc59d4b89fb3e4bb136cc6dd3a69b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

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
        
        $__internal_dfc036f6b17eed7efa00de71b250d9182c8e35818d8b8b5118e5cf03c2709d48->leave($__internal_dfc036f6b17eed7efa00de71b250d9182c8e35818d8b8b5118e5cf03c2709d48_prof);

        
        $__internal_d8f89c8ac4b4330281f5b67dc6e1b0b908cc59d4b89fb3e4bb136cc6dd3a69b2->leave($__internal_d8f89c8ac4b4330281f5b67dc6e1b0b908cc59d4b89fb3e4bb136cc6dd3a69b2_prof);

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
