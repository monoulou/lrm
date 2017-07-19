<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_15e745d9c973813b724db5b5aaf3f8cc1fb317184344031a472fb835e5cb17ae extends Twig_Template
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
        $__internal_77e254cfd192de14c9e6ab1e68a1bbc3d23f7d9040fa517e701f8a5fe1f93132 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77e254cfd192de14c9e6ab1e68a1bbc3d23f7d9040fa517e701f8a5fe1f93132->enter($__internal_77e254cfd192de14c9e6ab1e68a1bbc3d23f7d9040fa517e701f8a5fe1f93132_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_a6d5a9f12536b8b2800b2b2a14edc383ae126e876fa2a88ee6af58d798a7b3cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6d5a9f12536b8b2800b2b2a14edc383ae126e876fa2a88ee6af58d798a7b3cc->enter($__internal_a6d5a9f12536b8b2800b2b2a14edc383ae126e876fa2a88ee6af58d798a7b3cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_77e254cfd192de14c9e6ab1e68a1bbc3d23f7d9040fa517e701f8a5fe1f93132->leave($__internal_77e254cfd192de14c9e6ab1e68a1bbc3d23f7d9040fa517e701f8a5fe1f93132_prof);

        
        $__internal_a6d5a9f12536b8b2800b2b2a14edc383ae126e876fa2a88ee6af58d798a7b3cc->leave($__internal_a6d5a9f12536b8b2800b2b2a14edc383ae126e876fa2a88ee6af58d798a7b3cc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\money_widget.html.php");
    }
}
