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
        $__internal_f669dc3fa1b1b6832a1d566db8ea166d7672b03d5e97ea538104004e84db82bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f669dc3fa1b1b6832a1d566db8ea166d7672b03d5e97ea538104004e84db82bc->enter($__internal_f669dc3fa1b1b6832a1d566db8ea166d7672b03d5e97ea538104004e84db82bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MAUserBundle:Registration:confirmed.html.twig"));

        $__internal_3f373649c8969b790c0e1bcd8173a5763fb4bfee3d70ad1127afe27f00b87fc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f373649c8969b790c0e1bcd8173a5763fb4bfee3d70ad1127afe27f00b87fc7->enter($__internal_3f373649c8969b790c0e1bcd8173a5763fb4bfee3d70ad1127afe27f00b87fc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MAUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f669dc3fa1b1b6832a1d566db8ea166d7672b03d5e97ea538104004e84db82bc->leave($__internal_f669dc3fa1b1b6832a1d566db8ea166d7672b03d5e97ea538104004e84db82bc_prof);

        
        $__internal_3f373649c8969b790c0e1bcd8173a5763fb4bfee3d70ad1127afe27f00b87fc7->leave($__internal_3f373649c8969b790c0e1bcd8173a5763fb4bfee3d70ad1127afe27f00b87fc7_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_26375ecab623a049e081b6f65d911d7e237aaa3f190aee1feec348f3b3ccb192 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26375ecab623a049e081b6f65d911d7e237aaa3f190aee1feec348f3b3ccb192->enter($__internal_26375ecab623a049e081b6f65d911d7e237aaa3f190aee1feec348f3b3ccb192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_89ab4f8fe4c51a8ebdd8fd5f71999fa6d8f45d15981d1963f0f18fc7ce8fcfc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89ab4f8fe4c51a8ebdd8fd5f71999fa6d8f45d15981d1963f0f18fc7ce8fcfc6->enter($__internal_89ab4f8fe4c51a8ebdd8fd5f71999fa6d8f45d15981d1963f0f18fc7ce8fcfc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/confirmed.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
";
        
        $__internal_89ab4f8fe4c51a8ebdd8fd5f71999fa6d8f45d15981d1963f0f18fc7ce8fcfc6->leave($__internal_89ab4f8fe4c51a8ebdd8fd5f71999fa6d8f45d15981d1963f0f18fc7ce8fcfc6_prof);

        
        $__internal_26375ecab623a049e081b6f65d911d7e237aaa3f190aee1feec348f3b3ccb192->leave($__internal_26375ecab623a049e081b6f65d911d7e237aaa3f190aee1feec348f3b3ccb192_prof);

    }

    // line 9
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e6c149ebf3452841ff315ca3e1ddd6c57181607d7e350a49ac16e45a27e11bf1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6c149ebf3452841ff315ca3e1ddd6c57181607d7e350a49ac16e45a27e11bf1->enter($__internal_e6c149ebf3452841ff315ca3e1ddd6c57181607d7e350a49ac16e45a27e11bf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e741138bb229bd0bcad4c17555ba8eca3f1385d3a119a4763608dbe6b8c1bd7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e741138bb229bd0bcad4c17555ba8eca3f1385d3a119a4763608dbe6b8c1bd7a->enter($__internal_e741138bb229bd0bcad4c17555ba8eca3f1385d3a119a4763608dbe6b8c1bd7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_e741138bb229bd0bcad4c17555ba8eca3f1385d3a119a4763608dbe6b8c1bd7a->leave($__internal_e741138bb229bd0bcad4c17555ba8eca3f1385d3a119a4763608dbe6b8c1bd7a_prof);

        
        $__internal_e6c149ebf3452841ff315ca3e1ddd6c57181607d7e350a49ac16e45a27e11bf1->leave($__internal_e6c149ebf3452841ff315ca3e1ddd6c57181607d7e350a49ac16e45a27e11bf1_prof);

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
