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
        $__internal_67bb5befee95f8e9c55a6f9efcb6123fea8b1ddf97f20f5cb7b7f7e8c2f2b10d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67bb5befee95f8e9c55a6f9efcb6123fea8b1ddf97f20f5cb7b7f7e8c2f2b10d->enter($__internal_67bb5befee95f8e9c55a6f9efcb6123fea8b1ddf97f20f5cb7b7f7e8c2f2b10d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MAUserBundle:Registration:confirmed.html.twig"));

        $__internal_de969bcd557003a2649654a51a104d03457888ef5a003f5afa7142c6a36a53e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de969bcd557003a2649654a51a104d03457888ef5a003f5afa7142c6a36a53e5->enter($__internal_de969bcd557003a2649654a51a104d03457888ef5a003f5afa7142c6a36a53e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MAUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_67bb5befee95f8e9c55a6f9efcb6123fea8b1ddf97f20f5cb7b7f7e8c2f2b10d->leave($__internal_67bb5befee95f8e9c55a6f9efcb6123fea8b1ddf97f20f5cb7b7f7e8c2f2b10d_prof);

        
        $__internal_de969bcd557003a2649654a51a104d03457888ef5a003f5afa7142c6a36a53e5->leave($__internal_de969bcd557003a2649654a51a104d03457888ef5a003f5afa7142c6a36a53e5_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8b6e62126d36c18bc646e4c5d442b354175c5b6cb243ae87d29faed90d2dd3e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b6e62126d36c18bc646e4c5d442b354175c5b6cb243ae87d29faed90d2dd3e0->enter($__internal_8b6e62126d36c18bc646e4c5d442b354175c5b6cb243ae87d29faed90d2dd3e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6eade78506c37820e72cff34bd1f72122f196d002c4d1dfd753ee30d7043fb41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6eade78506c37820e72cff34bd1f72122f196d002c4d1dfd753ee30d7043fb41->enter($__internal_6eade78506c37820e72cff34bd1f72122f196d002c4d1dfd753ee30d7043fb41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/confirmed.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
";
        
        $__internal_6eade78506c37820e72cff34bd1f72122f196d002c4d1dfd753ee30d7043fb41->leave($__internal_6eade78506c37820e72cff34bd1f72122f196d002c4d1dfd753ee30d7043fb41_prof);

        
        $__internal_8b6e62126d36c18bc646e4c5d442b354175c5b6cb243ae87d29faed90d2dd3e0->leave($__internal_8b6e62126d36c18bc646e4c5d442b354175c5b6cb243ae87d29faed90d2dd3e0_prof);

    }

    // line 9
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_55c0fee8515445c4c088022e8a27ccc836709cd161c739dd6ed96d6c7251810f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55c0fee8515445c4c088022e8a27ccc836709cd161c739dd6ed96d6c7251810f->enter($__internal_55c0fee8515445c4c088022e8a27ccc836709cd161c739dd6ed96d6c7251810f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4b655a6b70cbcd8a7834eea651430c9538d473b74491dcfe2718b1d8dd6b3c27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b655a6b70cbcd8a7834eea651430c9538d473b74491dcfe2718b1d8dd6b3c27->enter($__internal_4b655a6b70cbcd8a7834eea651430c9538d473b74491dcfe2718b1d8dd6b3c27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_4b655a6b70cbcd8a7834eea651430c9538d473b74491dcfe2718b1d8dd6b3c27->leave($__internal_4b655a6b70cbcd8a7834eea651430c9538d473b74491dcfe2718b1d8dd6b3c27_prof);

        
        $__internal_55c0fee8515445c4c088022e8a27ccc836709cd161c739dd6ed96d6c7251810f->leave($__internal_55c0fee8515445c4c088022e8a27ccc836709cd161c739dd6ed96d6c7251810f_prof);

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
