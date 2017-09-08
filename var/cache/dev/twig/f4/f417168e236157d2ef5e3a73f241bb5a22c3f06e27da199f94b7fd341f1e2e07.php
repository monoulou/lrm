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
        $__internal_f9ad6036cb11ed26c5220cf54b4dc786ab424857e21a2740dc9a15fa01a6a62b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9ad6036cb11ed26c5220cf54b4dc786ab424857e21a2740dc9a15fa01a6a62b->enter($__internal_f9ad6036cb11ed26c5220cf54b4dc786ab424857e21a2740dc9a15fa01a6a62b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MAUserBundle:Registration:confirmed.html.twig"));

        $__internal_53472ea52a6d039e8b38b62e43c4a2baa02c3f101f93a384f8d6102433e37cbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53472ea52a6d039e8b38b62e43c4a2baa02c3f101f93a384f8d6102433e37cbc->enter($__internal_53472ea52a6d039e8b38b62e43c4a2baa02c3f101f93a384f8d6102433e37cbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MAUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f9ad6036cb11ed26c5220cf54b4dc786ab424857e21a2740dc9a15fa01a6a62b->leave($__internal_f9ad6036cb11ed26c5220cf54b4dc786ab424857e21a2740dc9a15fa01a6a62b_prof);

        
        $__internal_53472ea52a6d039e8b38b62e43c4a2baa02c3f101f93a384f8d6102433e37cbc->leave($__internal_53472ea52a6d039e8b38b62e43c4a2baa02c3f101f93a384f8d6102433e37cbc_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7ea07cf5319cd964c5f912a91e3e9133c0045c42624c8ddef732338e43a6ff7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ea07cf5319cd964c5f912a91e3e9133c0045c42624c8ddef732338e43a6ff7b->enter($__internal_7ea07cf5319cd964c5f912a91e3e9133c0045c42624c8ddef732338e43a6ff7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_308d467ee1128d58c10bc6c0ac1c3e06dbfa1974aeb915b8736ffa825f28ad5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_308d467ee1128d58c10bc6c0ac1c3e06dbfa1974aeb915b8736ffa825f28ad5a->enter($__internal_308d467ee1128d58c10bc6c0ac1c3e06dbfa1974aeb915b8736ffa825f28ad5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/confirmed.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
";
        
        $__internal_308d467ee1128d58c10bc6c0ac1c3e06dbfa1974aeb915b8736ffa825f28ad5a->leave($__internal_308d467ee1128d58c10bc6c0ac1c3e06dbfa1974aeb915b8736ffa825f28ad5a_prof);

        
        $__internal_7ea07cf5319cd964c5f912a91e3e9133c0045c42624c8ddef732338e43a6ff7b->leave($__internal_7ea07cf5319cd964c5f912a91e3e9133c0045c42624c8ddef732338e43a6ff7b_prof);

    }

    // line 9
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_767d41cda89f9bd547740164d58e0e4bbf16f408400e8c3a55c5ea682d4f4ac4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_767d41cda89f9bd547740164d58e0e4bbf16f408400e8c3a55c5ea682d4f4ac4->enter($__internal_767d41cda89f9bd547740164d58e0e4bbf16f408400e8c3a55c5ea682d4f4ac4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_311ef4ec10edcff1f6f4f11d3c3378a294af0515018012c638978ede1b4c914a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_311ef4ec10edcff1f6f4f11d3c3378a294af0515018012c638978ede1b4c914a->enter($__internal_311ef4ec10edcff1f6f4f11d3c3378a294af0515018012c638978ede1b4c914a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_311ef4ec10edcff1f6f4f11d3c3378a294af0515018012c638978ede1b4c914a->leave($__internal_311ef4ec10edcff1f6f4f11d3c3378a294af0515018012c638978ede1b4c914a_prof);

        
        $__internal_767d41cda89f9bd547740164d58e0e4bbf16f408400e8c3a55c5ea682d4f4ac4->leave($__internal_767d41cda89f9bd547740164d58e0e4bbf16f408400e8c3a55c5ea682d4f4ac4_prof);

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
