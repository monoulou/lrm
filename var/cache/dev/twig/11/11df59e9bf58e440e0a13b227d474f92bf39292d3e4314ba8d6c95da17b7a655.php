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
        $__internal_5b43a9c75dadeb3df96eac1f6d5614bc1d0676f62b7d2cbc427871a729b3dc98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b43a9c75dadeb3df96eac1f6d5614bc1d0676f62b7d2cbc427871a729b3dc98->enter($__internal_5b43a9c75dadeb3df96eac1f6d5614bc1d0676f62b7d2cbc427871a729b3dc98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MAUser/Registration/confirmed.html.twig"));

        $__internal_a7d8afe46aa8bdba4d464807ffbf2b6626417d3324852efac8cba43d65158831 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7d8afe46aa8bdba4d464807ffbf2b6626417d3324852efac8cba43d65158831->enter($__internal_a7d8afe46aa8bdba4d464807ffbf2b6626417d3324852efac8cba43d65158831_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MAUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b43a9c75dadeb3df96eac1f6d5614bc1d0676f62b7d2cbc427871a729b3dc98->leave($__internal_5b43a9c75dadeb3df96eac1f6d5614bc1d0676f62b7d2cbc427871a729b3dc98_prof);

        
        $__internal_a7d8afe46aa8bdba4d464807ffbf2b6626417d3324852efac8cba43d65158831->leave($__internal_a7d8afe46aa8bdba4d464807ffbf2b6626417d3324852efac8cba43d65158831_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b8070b9748d7bad9998ebfbaecf8b76328c674c0c5ad18c68a97a05717bf003b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8070b9748d7bad9998ebfbaecf8b76328c674c0c5ad18c68a97a05717bf003b->enter($__internal_b8070b9748d7bad9998ebfbaecf8b76328c674c0c5ad18c68a97a05717bf003b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a2cdd2398bde9a0cdc725530a7710287c22fd874ec3d9b9f570455c38065e61d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2cdd2398bde9a0cdc725530a7710287c22fd874ec3d9b9f570455c38065e61d->enter($__internal_a2cdd2398bde9a0cdc725530a7710287c22fd874ec3d9b9f570455c38065e61d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/confirmed.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
";
        
        $__internal_a2cdd2398bde9a0cdc725530a7710287c22fd874ec3d9b9f570455c38065e61d->leave($__internal_a2cdd2398bde9a0cdc725530a7710287c22fd874ec3d9b9f570455c38065e61d_prof);

        
        $__internal_b8070b9748d7bad9998ebfbaecf8b76328c674c0c5ad18c68a97a05717bf003b->leave($__internal_b8070b9748d7bad9998ebfbaecf8b76328c674c0c5ad18c68a97a05717bf003b_prof);

    }

    // line 9
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_147aaf6bfd584ac3b89a1e19e1143b07d1ff8b6ace5efcb99a2e4b009a0b6bf4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_147aaf6bfd584ac3b89a1e19e1143b07d1ff8b6ace5efcb99a2e4b009a0b6bf4->enter($__internal_147aaf6bfd584ac3b89a1e19e1143b07d1ff8b6ace5efcb99a2e4b009a0b6bf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_227fc18f4dc3c8afe0cc95cc96e9b87b55d4a1f0b8778f1be8f59f5e1f308647 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_227fc18f4dc3c8afe0cc95cc96e9b87b55d4a1f0b8778f1be8f59f5e1f308647->enter($__internal_227fc18f4dc3c8afe0cc95cc96e9b87b55d4a1f0b8778f1be8f59f5e1f308647_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_227fc18f4dc3c8afe0cc95cc96e9b87b55d4a1f0b8778f1be8f59f5e1f308647->leave($__internal_227fc18f4dc3c8afe0cc95cc96e9b87b55d4a1f0b8778f1be8f59f5e1f308647_prof);

        
        $__internal_147aaf6bfd584ac3b89a1e19e1143b07d1ff8b6ace5efcb99a2e4b009a0b6bf4->leave($__internal_147aaf6bfd584ac3b89a1e19e1143b07d1ff8b6ace5efcb99a2e4b009a0b6bf4_prof);

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
