<?php

/* @MAUser/Registration/confirmed.html.twig */
class __TwigTemplate_6c005dd74dc74a06e62efee7778a2ee0f40fa4e37829f2e1908fe7ce7633309f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@MAUser/Registration/confirmed.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b8e8c712d9e44cb866c77fba491205b47f480c10ef7031248bc3e523d091a930 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8e8c712d9e44cb866c77fba491205b47f480c10ef7031248bc3e523d091a930->enter($__internal_b8e8c712d9e44cb866c77fba491205b47f480c10ef7031248bc3e523d091a930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MAUser/Registration/confirmed.html.twig"));

        $__internal_cb42a71d157ebec95bcee7d8ee74c4e6a71c59ffa7a6b01bf49fdbc4267e7c45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb42a71d157ebec95bcee7d8ee74c4e6a71c59ffa7a6b01bf49fdbc4267e7c45->enter($__internal_cb42a71d157ebec95bcee7d8ee74c4e6a71c59ffa7a6b01bf49fdbc4267e7c45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MAUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8e8c712d9e44cb866c77fba491205b47f480c10ef7031248bc3e523d091a930->leave($__internal_b8e8c712d9e44cb866c77fba491205b47f480c10ef7031248bc3e523d091a930_prof);

        
        $__internal_cb42a71d157ebec95bcee7d8ee74c4e6a71c59ffa7a6b01bf49fdbc4267e7c45->leave($__internal_cb42a71d157ebec95bcee7d8ee74c4e6a71c59ffa7a6b01bf49fdbc4267e7c45_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_267c7ef4100242d9f9e55314c5207dff0db5a9f5b7c0acd227849aa682832f80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_267c7ef4100242d9f9e55314c5207dff0db5a9f5b7c0acd227849aa682832f80->enter($__internal_267c7ef4100242d9f9e55314c5207dff0db5a9f5b7c0acd227849aa682832f80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_9474adc3081555146b8d8ad145bba82bb75bffb9fe772a305625b0cdf7565ea1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9474adc3081555146b8d8ad145bba82bb75bffb9fe772a305625b0cdf7565ea1->enter($__internal_9474adc3081555146b8d8ad145bba82bb75bffb9fe772a305625b0cdf7565ea1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/confirmed.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
";
        
        $__internal_9474adc3081555146b8d8ad145bba82bb75bffb9fe772a305625b0cdf7565ea1->leave($__internal_9474adc3081555146b8d8ad145bba82bb75bffb9fe772a305625b0cdf7565ea1_prof);

        
        $__internal_267c7ef4100242d9f9e55314c5207dff0db5a9f5b7c0acd227849aa682832f80->leave($__internal_267c7ef4100242d9f9e55314c5207dff0db5a9f5b7c0acd227849aa682832f80_prof);

    }

    // line 9
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f0f33ddc74ee966e7f250a890c80edc214432332aa31a0b8f39d7613618f64f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0f33ddc74ee966e7f250a890c80edc214432332aa31a0b8f39d7613618f64f0->enter($__internal_f0f33ddc74ee966e7f250a890c80edc214432332aa31a0b8f39d7613618f64f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_388dc18580f695fab755d608e62ea1390d30a1e19f2d2edae75b2466842a9e9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_388dc18580f695fab755d608e62ea1390d30a1e19f2d2edae75b2466842a9e9c->enter($__internal_388dc18580f695fab755d608e62ea1390d30a1e19f2d2edae75b2466842a9e9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 10
        echo "    <div class=\"container-fluid\" id=\"confirmed_container\">
        <div class=\"row\">
            <div class=\"col-lg-offset-10 col-lg-2\">
                <p><a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\">Déconnecter l'utilisateur</a></p>
            </div>
        </div>
        <div class=\"row\">
            <h3 style=\"margin-left: 15px\">CONFIRMATION DE CREATION DE COMPTE</h3><hr style=\"border: 1px solid darkgray; margin-left: 25px; margin-right: 25px \">
        </div>
        <div class=\"row\">
            <div class=\"col-lg-5\" id=\"confirmed_message\">
            <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
            ";
        // line 22
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 23
            echo "                <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
            ";
        }
        // line 25
        echo "            </div>
        </div>
    </div>
";
        
        $__internal_388dc18580f695fab755d608e62ea1390d30a1e19f2d2edae75b2466842a9e9c->leave($__internal_388dc18580f695fab755d608e62ea1390d30a1e19f2d2edae75b2466842a9e9c_prof);

        
        $__internal_f0f33ddc74ee966e7f250a890c80edc214432332aa31a0b8f39d7613618f64f0->leave($__internal_f0f33ddc74ee966e7f250a890c80edc214432332aa31a0b8f39d7613618f64f0_prof);

    }

    public function getTemplateName()
    {
        return "@MAUser/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 25,  94 => 23,  92 => 22,  88 => 21,  77 => 13,  72 => 10,  63 => 9,  50 => 6,  41 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block stylesheets %}
<link href=\"{{ asset ('css/confirmed.css') }}\" rel='stylesheet' type='text/css' />
{% endblock %}

{% block fos_user_content %}
    <div class=\"container-fluid\" id=\"confirmed_container\">
        <div class=\"row\">
            <div class=\"col-lg-offset-10 col-lg-2\">
                <p><a href=\"{{ path('fos_user_security_logout') }}\">Déconnecter l'utilisateur</a></p>
            </div>
        </div>
        <div class=\"row\">
            <h3 style=\"margin-left: 15px\">CONFIRMATION DE CREATION DE COMPTE</h3><hr style=\"border: 1px solid darkgray; margin-left: 25px; margin-right: 25px \">
        </div>
        <div class=\"row\">
            <div class=\"col-lg-5\" id=\"confirmed_message\">
            <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
            {% if targetUrl %}
                <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
            {% endif %}
            </div>
        </div>
    </div>
{% endblock fos_user_content %}", "@MAUser/Registration/confirmed.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\UserBundle\\Resources\\views\\Registration\\confirmed.html.twig");
    }
}
