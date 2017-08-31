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
        $__internal_0bf3753094c797182e02bcdca4bf22a34862e0b510f476266058453395eb5a24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bf3753094c797182e02bcdca4bf22a34862e0b510f476266058453395eb5a24->enter($__internal_0bf3753094c797182e02bcdca4bf22a34862e0b510f476266058453395eb5a24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MAUser/Security/login.html.twig"));

        $__internal_eccc2f3321c62ee698be73ae3733dc7c3557b161d9e045976eb0b9d4041e11f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eccc2f3321c62ee698be73ae3733dc7c3557b161d9e045976eb0b9d4041e11f3->enter($__internal_eccc2f3321c62ee698be73ae3733dc7c3557b161d9e045976eb0b9d4041e11f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MAUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0bf3753094c797182e02bcdca4bf22a34862e0b510f476266058453395eb5a24->leave($__internal_0bf3753094c797182e02bcdca4bf22a34862e0b510f476266058453395eb5a24_prof);

        
        $__internal_eccc2f3321c62ee698be73ae3733dc7c3557b161d9e045976eb0b9d4041e11f3->leave($__internal_eccc2f3321c62ee698be73ae3733dc7c3557b161d9e045976eb0b9d4041e11f3_prof);

    }

    // line 4
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_36138cc93492ac66f84dbf038223f4540d10805b6a0ec5b797a5e80c7e51cfec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36138cc93492ac66f84dbf038223f4540d10805b6a0ec5b797a5e80c7e51cfec->enter($__internal_36138cc93492ac66f84dbf038223f4540d10805b6a0ec5b797a5e80c7e51cfec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_513512139e8cb2df5437ae33b4b0af9c62095ef19e64980d2c73aacd315f0ef8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_513512139e8cb2df5437ae33b4b0af9c62095ef19e64980d2c73aacd315f0ef8->enter($__internal_513512139e8cb2df5437ae33b4b0af9c62095ef19e64980d2c73aacd315f0ef8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 5
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_513512139e8cb2df5437ae33b4b0af9c62095ef19e64980d2c73aacd315f0ef8->leave($__internal_513512139e8cb2df5437ae33b4b0af9c62095ef19e64980d2c73aacd315f0ef8_prof);

        
        $__internal_36138cc93492ac66f84dbf038223f4540d10805b6a0ec5b797a5e80c7e51cfec->leave($__internal_36138cc93492ac66f84dbf038223f4540d10805b6a0ec5b797a5e80c7e51cfec_prof);

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
