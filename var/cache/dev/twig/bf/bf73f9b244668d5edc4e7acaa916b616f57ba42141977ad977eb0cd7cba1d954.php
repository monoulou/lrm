<?php

/* @MALrm/Candidat/add_candidat.html.twig */
class __TwigTemplate_41958df1703c59a307f66de481b4469266ae4e0dbc8f1d0edc73f261bd6e7457 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@MALrm/Candidat/add_candidat.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a9fdc75db3687d14ac523bcf914c0ed5368ca2adcfd5396c3daf182107428af6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9fdc75db3687d14ac523bcf914c0ed5368ca2adcfd5396c3daf182107428af6->enter($__internal_a9fdc75db3687d14ac523bcf914c0ed5368ca2adcfd5396c3daf182107428af6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MALrm/Candidat/add_candidat.html.twig"));

        $__internal_fa1fe81cee148d8ef0efaf56c1e694a1d2a24c519be077268219f47c0c6a3968 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa1fe81cee148d8ef0efaf56c1e694a1d2a24c519be077268219f47c0c6a3968->enter($__internal_fa1fe81cee148d8ef0efaf56c1e694a1d2a24c519be077268219f47c0c6a3968_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MALrm/Candidat/add_candidat.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a9fdc75db3687d14ac523bcf914c0ed5368ca2adcfd5396c3daf182107428af6->leave($__internal_a9fdc75db3687d14ac523bcf914c0ed5368ca2adcfd5396c3daf182107428af6_prof);

        
        $__internal_fa1fe81cee148d8ef0efaf56c1e694a1d2a24c519be077268219f47c0c6a3968->leave($__internal_fa1fe81cee148d8ef0efaf56c1e694a1d2a24c519be077268219f47c0c6a3968_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e7690bde87d27e8c294e1a58fe93b2361173011caca6b14dba1af66eb7761817 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7690bde87d27e8c294e1a58fe93b2361173011caca6b14dba1af66eb7761817->enter($__internal_e7690bde87d27e8c294e1a58fe93b2361173011caca6b14dba1af66eb7761817_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ecab66ca6f67105de8fc29d095abaf0d6a0e0c843b68c3e8eae3b95703c9fb81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecab66ca6f67105de8fc29d095abaf0d6a0e0c843b68c3e8eae3b95703c9fb81->enter($__internal_ecab66ca6f67105de8fc29d095abaf0d6a0e0c843b68c3e8eae3b95703c9fb81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "     <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/index.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
 ";
        
        $__internal_ecab66ca6f67105de8fc29d095abaf0d6a0e0c843b68c3e8eae3b95703c9fb81->leave($__internal_ecab66ca6f67105de8fc29d095abaf0d6a0e0c843b68c3e8eae3b95703c9fb81_prof);

        
        $__internal_e7690bde87d27e8c294e1a58fe93b2361173011caca6b14dba1af66eb7761817->leave($__internal_e7690bde87d27e8c294e1a58fe93b2361173011caca6b14dba1af66eb7761817_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_d1ee7367a8130b784436586dcfa67a9182e4f50b156619cf68f7400b41f06d7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1ee7367a8130b784436586dcfa67a9182e4f50b156619cf68f7400b41f06d7b->enter($__internal_d1ee7367a8130b784436586dcfa67a9182e4f50b156619cf68f7400b41f06d7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1b2d375ec46ffeef993d8699e60dfa518be60db38841c8496deaa920f1d1958b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b2d375ec46ffeef993d8699e60dfa518be60db38841c8496deaa920f1d1958b->enter($__internal_1b2d375ec46ffeef993d8699e60dfa518be60db38841c8496deaa920f1d1958b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
<div class=\"container-fluid\" id=\"main_container\">
    <div class=\"row\">
            <div class=\"col-lg-offset-9\">
                ";
        // line 12
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 13
            echo "                    Connecté en tant que ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "--<a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a>
                ";
        } else {
            // line 15
            echo "                    <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">Connexion</a>
                ";
        }
        // line 17
        echo "            </div>

    </div>
    <!-- START TOP NAVBAR-->
    ";
        // line 21
        $this->loadTemplate("navbar.html.twig", "@MALrm/Candidat/add_candidat.html.twig", 21)->display($context);
        // line 22
        echo "    <!-- END TOP NAVBAR -->
    <!-- START SIDEBAR-->
    ";
        // line 24
        $this->loadTemplate("sidebar.html.twig", "@MALrm/Candidat/add_candidat.html.twig", 24)->display($context);
        // line 25
        echo "    <!-- END SIDEBAR-->

    <div class=\"col-lg-9\" style=\"margin-left: 10px;\">
        <div class=\"row\">
            <h5>AJOUTER UN CANDIDAT:</h5>
        </div>
    </div>


</div>



";
        
        $__internal_1b2d375ec46ffeef993d8699e60dfa518be60db38841c8496deaa920f1d1958b->leave($__internal_1b2d375ec46ffeef993d8699e60dfa518be60db38841c8496deaa920f1d1958b_prof);

        
        $__internal_d1ee7367a8130b784436586dcfa67a9182e4f50b156619cf68f7400b41f06d7b->leave($__internal_d1ee7367a8130b784436586dcfa67a9182e4f50b156619cf68f7400b41f06d7b_prof);

    }

    // line 41
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f15c116950ae98b48a8b5a3fd204d276d22d988f332b03e8103bad2e62a56994 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f15c116950ae98b48a8b5a3fd204d276d22d988f332b03e8103bad2e62a56994->enter($__internal_f15c116950ae98b48a8b5a3fd204d276d22d988f332b03e8103bad2e62a56994_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_334d265dc89876a9496b1a0a98e4ca734b7bf136e9ab2b335d65f6e7afb3f11f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_334d265dc89876a9496b1a0a98e4ca734b7bf136e9ab2b335d65f6e7afb3f11f->enter($__internal_334d265dc89876a9496b1a0a98e4ca734b7bf136e9ab2b335d65f6e7afb3f11f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_334d265dc89876a9496b1a0a98e4ca734b7bf136e9ab2b335d65f6e7afb3f11f->leave($__internal_334d265dc89876a9496b1a0a98e4ca734b7bf136e9ab2b335d65f6e7afb3f11f_prof);

        
        $__internal_f15c116950ae98b48a8b5a3fd204d276d22d988f332b03e8103bad2e62a56994->leave($__internal_f15c116950ae98b48a8b5a3fd204d276d22d988f332b03e8103bad2e62a56994_prof);

    }

    public function getTemplateName()
    {
        return "@MALrm/Candidat/add_candidat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 41,  109 => 25,  107 => 24,  103 => 22,  101 => 21,  95 => 17,  89 => 15,  81 => 13,  79 => 12,  73 => 8,  64 => 7,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

 {% block stylesheets %}
     <link href=\"{{ asset ('css/index.css') }}\" rel='stylesheet' type='text/css' />
 {% endblock %}

{% block body %}

<div class=\"container-fluid\" id=\"main_container\">
    <div class=\"row\">
            <div class=\"col-lg-offset-9\">
                {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                    Connecté en tant que {{ app.user.username }}--<a href=\"{{ path('fos_user_security_logout') }}\">Déconnexion</a>
                {% else %}
                    <a href=\"{{ path('fos_user_security_login') }}\">Connexion</a>
                {% endif %}
            </div>

    </div>
    <!-- START TOP NAVBAR-->
    {% include 'navbar.html.twig' %}
    <!-- END TOP NAVBAR -->
    <!-- START SIDEBAR-->
    {% include 'sidebar.html.twig' %}
    <!-- END SIDEBAR-->

    <div class=\"col-lg-9\" style=\"margin-left: 10px;\">
        <div class=\"row\">
            <h5>AJOUTER UN CANDIDAT:</h5>
        </div>
    </div>


</div>



{% endblock %}


{% block javascripts %}
{% endblock %}", "@MALrm/Candidat/add_candidat.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\LrmBundle\\Resources\\views\\Candidat\\add_candidat.html.twig");
    }
}
