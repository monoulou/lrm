<?php

/* @MAUser/Security/login.html.twig */
class __TwigTemplate_e5e905a08de63d190931a289f4e94f996e70e0bbddea65d49a7866cecbbd0d28 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@MAUser/Security/login.html.twig", 2);
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
        $__internal_90abfb5e0cdb865a639a0ba393d7854d19635cc333365ba9a6049b4815aac285 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90abfb5e0cdb865a639a0ba393d7854d19635cc333365ba9a6049b4815aac285->enter($__internal_90abfb5e0cdb865a639a0ba393d7854d19635cc333365ba9a6049b4815aac285_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MAUser/Security/login.html.twig"));

        $__internal_fe106f73a6b4828f88c0fc29961081f17aa830dde2e6f73d91671747ede6cbdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe106f73a6b4828f88c0fc29961081f17aa830dde2e6f73d91671747ede6cbdd->enter($__internal_fe106f73a6b4828f88c0fc29961081f17aa830dde2e6f73d91671747ede6cbdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MAUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_90abfb5e0cdb865a639a0ba393d7854d19635cc333365ba9a6049b4815aac285->leave($__internal_90abfb5e0cdb865a639a0ba393d7854d19635cc333365ba9a6049b4815aac285_prof);

        
        $__internal_fe106f73a6b4828f88c0fc29961081f17aa830dde2e6f73d91671747ede6cbdd->leave($__internal_fe106f73a6b4828f88c0fc29961081f17aa830dde2e6f73d91671747ede6cbdd_prof);

    }

    // line 4
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5ac8ca68df999f270445628ef4b2b86f3cc2eaecd92af363a2152f03de7ad79a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ac8ca68df999f270445628ef4b2b86f3cc2eaecd92af363a2152f03de7ad79a->enter($__internal_5ac8ca68df999f270445628ef4b2b86f3cc2eaecd92af363a2152f03de7ad79a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_bce6fdd7f0e57556c5d702c1da5144668d376e5553f71a3ad94218c889c7cab6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bce6fdd7f0e57556c5d702c1da5144668d376e5553f71a3ad94218c889c7cab6->enter($__internal_bce6fdd7f0e57556c5d702c1da5144668d376e5553f71a3ad94218c889c7cab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 5
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_bce6fdd7f0e57556c5d702c1da5144668d376e5553f71a3ad94218c889c7cab6->leave($__internal_bce6fdd7f0e57556c5d702c1da5144668d376e5553f71a3ad94218c889c7cab6_prof);

        
        $__internal_5ac8ca68df999f270445628ef4b2b86f3cc2eaecd92af363a2152f03de7ad79a->leave($__internal_5ac8ca68df999f270445628ef4b2b86f3cc2eaecd92af363a2152f03de7ad79a_prof);

    }

    public function getTemplateName()
    {
        return "@MAUser/Security/login.html.twig";
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
{% endblock fos_user_content %}", "@MAUser/Security/login.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\UserBundle\\Resources\\views\\Security\\login.html.twig");
    }
}
