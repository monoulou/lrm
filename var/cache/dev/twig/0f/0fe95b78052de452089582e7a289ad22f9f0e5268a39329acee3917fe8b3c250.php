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
        $__internal_71089c788fad35ceadd18ba896dcafb339721dbfe80b4ba8cc4c61442a790e2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71089c788fad35ceadd18ba896dcafb339721dbfe80b4ba8cc4c61442a790e2d->enter($__internal_71089c788fad35ceadd18ba896dcafb339721dbfe80b4ba8cc4c61442a790e2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_d331d8371c0d9113f99782f1b0b5654e5eb768397c42acbbc67433409801f489 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d331d8371c0d9113f99782f1b0b5654e5eb768397c42acbbc67433409801f489->enter($__internal_d331d8371c0d9113f99782f1b0b5654e5eb768397c42acbbc67433409801f489_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_71089c788fad35ceadd18ba896dcafb339721dbfe80b4ba8cc4c61442a790e2d->leave($__internal_71089c788fad35ceadd18ba896dcafb339721dbfe80b4ba8cc4c61442a790e2d_prof);

        
        $__internal_d331d8371c0d9113f99782f1b0b5654e5eb768397c42acbbc67433409801f489->leave($__internal_d331d8371c0d9113f99782f1b0b5654e5eb768397c42acbbc67433409801f489_prof);

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
