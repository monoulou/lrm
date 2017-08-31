<?php

/* MAUserBundle:Security:login.html.twig */
class __TwigTemplate_4f46276a541efdf20b368e3ab3dca07bddd737a11593095285d9efddf38e9b7e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "MAUserBundle:Security:login.html.twig", 2);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2b4467c11b91d016f1d867de6de096068f8f85dec0faae22bafba58c7135e253 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b4467c11b91d016f1d867de6de096068f8f85dec0faae22bafba58c7135e253->enter($__internal_2b4467c11b91d016f1d867de6de096068f8f85dec0faae22bafba58c7135e253_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MAUserBundle:Security:login.html.twig"));

        $__internal_0bf8cfa49d61d5df2f722c2a261b57e925b8690fc275c285a52dc099c516a7cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bf8cfa49d61d5df2f722c2a261b57e925b8690fc275c285a52dc099c516a7cc->enter($__internal_0bf8cfa49d61d5df2f722c2a261b57e925b8690fc275c285a52dc099c516a7cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MAUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b4467c11b91d016f1d867de6de096068f8f85dec0faae22bafba58c7135e253->leave($__internal_2b4467c11b91d016f1d867de6de096068f8f85dec0faae22bafba58c7135e253_prof);

        
        $__internal_0bf8cfa49d61d5df2f722c2a261b57e925b8690fc275c285a52dc099c516a7cc->leave($__internal_0bf8cfa49d61d5df2f722c2a261b57e925b8690fc275c285a52dc099c516a7cc_prof);

    }

    // line 4
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4fb427a21e425c244dfceb0889d73a121ba824dfb4629fc2db5ed5ca4b6c5f33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fb427a21e425c244dfceb0889d73a121ba824dfb4629fc2db5ed5ca4b6c5f33->enter($__internal_4fb427a21e425c244dfceb0889d73a121ba824dfb4629fc2db5ed5ca4b6c5f33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_aac4375bb7847ec8a4d24a731e56d71fe628dc124721d3fb3e6d1cfbcb7f253a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aac4375bb7847ec8a4d24a731e56d71fe628dc124721d3fb3e6d1cfbcb7f253a->enter($__internal_aac4375bb7847ec8a4d24a731e56d71fe628dc124721d3fb3e6d1cfbcb7f253a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 5
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_aac4375bb7847ec8a4d24a731e56d71fe628dc124721d3fb3e6d1cfbcb7f253a->leave($__internal_aac4375bb7847ec8a4d24a731e56d71fe628dc124721d3fb3e6d1cfbcb7f253a_prof);

        
        $__internal_4fb427a21e425c244dfceb0889d73a121ba824dfb4629fc2db5ed5ca4b6c5f33->leave($__internal_4fb427a21e425c244dfceb0889d73a121ba824dfb4629fc2db5ed5ca4b6c5f33_prof);

    }

    public function getTemplateName()
    {
        return "MAUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 5,  40 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}", "MAUserBundle:Security:login.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\UserBundle/Resources/views/Security/login.html.twig");
    }
}
