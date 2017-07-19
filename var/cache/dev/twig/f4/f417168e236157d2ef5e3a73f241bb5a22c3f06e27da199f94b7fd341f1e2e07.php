<?php

/* MAUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_eac7eff3a7147d7a141bad5cd646f6dc79d2697926d239e1c028bcd2145739e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "MAUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_8f3a321d105f9f21fef9ce50cd7a692112a1258a52aee0d02bc1c88c28bd1a9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f3a321d105f9f21fef9ce50cd7a692112a1258a52aee0d02bc1c88c28bd1a9e->enter($__internal_8f3a321d105f9f21fef9ce50cd7a692112a1258a52aee0d02bc1c88c28bd1a9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MAUserBundle:Registration:confirmed.html.twig"));

        $__internal_4c49a79cfc98cdcbc1379144209a2cadb30a6505074ac5ecbc5eb93c805d6a39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c49a79cfc98cdcbc1379144209a2cadb30a6505074ac5ecbc5eb93c805d6a39->enter($__internal_4c49a79cfc98cdcbc1379144209a2cadb30a6505074ac5ecbc5eb93c805d6a39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MAUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f3a321d105f9f21fef9ce50cd7a692112a1258a52aee0d02bc1c88c28bd1a9e->leave($__internal_8f3a321d105f9f21fef9ce50cd7a692112a1258a52aee0d02bc1c88c28bd1a9e_prof);

        
        $__internal_4c49a79cfc98cdcbc1379144209a2cadb30a6505074ac5ecbc5eb93c805d6a39->leave($__internal_4c49a79cfc98cdcbc1379144209a2cadb30a6505074ac5ecbc5eb93c805d6a39_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_503928cdde7d357610f3d56d45bad23005bcb87ff929f345653494728610c5be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_503928cdde7d357610f3d56d45bad23005bcb87ff929f345653494728610c5be->enter($__internal_503928cdde7d357610f3d56d45bad23005bcb87ff929f345653494728610c5be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_09ac42be5ce1d96457c7909a28c5a50b2f2ffefda594342673c91408d9fe8ec1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09ac42be5ce1d96457c7909a28c5a50b2f2ffefda594342673c91408d9fe8ec1->enter($__internal_09ac42be5ce1d96457c7909a28c5a50b2f2ffefda594342673c91408d9fe8ec1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/confirmed.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
";
        
        $__internal_09ac42be5ce1d96457c7909a28c5a50b2f2ffefda594342673c91408d9fe8ec1->leave($__internal_09ac42be5ce1d96457c7909a28c5a50b2f2ffefda594342673c91408d9fe8ec1_prof);

        
        $__internal_503928cdde7d357610f3d56d45bad23005bcb87ff929f345653494728610c5be->leave($__internal_503928cdde7d357610f3d56d45bad23005bcb87ff929f345653494728610c5be_prof);

    }

    // line 9
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2190148fbf3ec1970037075f45eee0830078b45dcab52d0adad4c276b2824ffa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2190148fbf3ec1970037075f45eee0830078b45dcab52d0adad4c276b2824ffa->enter($__internal_2190148fbf3ec1970037075f45eee0830078b45dcab52d0adad4c276b2824ffa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1c1afe34476f27d9fa42933b3fb501ce9c52885e1e53b44d3d2ad2b737d20a1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c1afe34476f27d9fa42933b3fb501ce9c52885e1e53b44d3d2ad2b737d20a1d->enter($__internal_1c1afe34476f27d9fa42933b3fb501ce9c52885e1e53b44d3d2ad2b737d20a1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_1c1afe34476f27d9fa42933b3fb501ce9c52885e1e53b44d3d2ad2b737d20a1d->leave($__internal_1c1afe34476f27d9fa42933b3fb501ce9c52885e1e53b44d3d2ad2b737d20a1d_prof);

        
        $__internal_2190148fbf3ec1970037075f45eee0830078b45dcab52d0adad4c276b2824ffa->leave($__internal_2190148fbf3ec1970037075f45eee0830078b45dcab52d0adad4c276b2824ffa_prof);

    }

    public function getTemplateName()
    {
        return "MAUserBundle:Registration:confirmed.html.twig";
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
{% endblock fos_user_content %}", "MAUserBundle:Registration:confirmed.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\UserBundle/Resources/views/Registration/confirmed.html.twig");
    }
}
