<?php

/* MALrmBundle:Candidat:add_candidat.html.twig */
class __TwigTemplate_3aa39777c75d22bda7140857b0e8c02e82141d68c49b2f4fc6b18ced66ffafe6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MALrmBundle:Candidat:add_candidat.html.twig", 1);
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
        $__internal_520480cac586aadec59a57a011fa994f4118926f4e820cf93f42c3322d543350 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_520480cac586aadec59a57a011fa994f4118926f4e820cf93f42c3322d543350->enter($__internal_520480cac586aadec59a57a011fa994f4118926f4e820cf93f42c3322d543350_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Candidat:add_candidat.html.twig"));

        $__internal_d49fe3f0d8f7f7818d1384d3219c89b3d2fbd90978084a31b6d0ca9c9f88c8a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d49fe3f0d8f7f7818d1384d3219c89b3d2fbd90978084a31b6d0ca9c9f88c8a8->enter($__internal_d49fe3f0d8f7f7818d1384d3219c89b3d2fbd90978084a31b6d0ca9c9f88c8a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Candidat:add_candidat.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_520480cac586aadec59a57a011fa994f4118926f4e820cf93f42c3322d543350->leave($__internal_520480cac586aadec59a57a011fa994f4118926f4e820cf93f42c3322d543350_prof);

        
        $__internal_d49fe3f0d8f7f7818d1384d3219c89b3d2fbd90978084a31b6d0ca9c9f88c8a8->leave($__internal_d49fe3f0d8f7f7818d1384d3219c89b3d2fbd90978084a31b6d0ca9c9f88c8a8_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_dc452a8e7d07623cbe3aeb6d47110b942097cc8f98283e72eec63fecf0ada354 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc452a8e7d07623cbe3aeb6d47110b942097cc8f98283e72eec63fecf0ada354->enter($__internal_dc452a8e7d07623cbe3aeb6d47110b942097cc8f98283e72eec63fecf0ada354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_44891138c665693acb5ef46dbf0d889e742c412c438813e0ccbb34ccc8eba352 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44891138c665693acb5ef46dbf0d889e742c412c438813e0ccbb34ccc8eba352->enter($__internal_44891138c665693acb5ef46dbf0d889e742c412c438813e0ccbb34ccc8eba352_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "     <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/index.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
 ";
        
        $__internal_44891138c665693acb5ef46dbf0d889e742c412c438813e0ccbb34ccc8eba352->leave($__internal_44891138c665693acb5ef46dbf0d889e742c412c438813e0ccbb34ccc8eba352_prof);

        
        $__internal_dc452a8e7d07623cbe3aeb6d47110b942097cc8f98283e72eec63fecf0ada354->leave($__internal_dc452a8e7d07623cbe3aeb6d47110b942097cc8f98283e72eec63fecf0ada354_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_a4efbb24c2425384bf09dbc06dbb0738fe7fd5555aff0cf1346d67e9c0dc7f67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4efbb24c2425384bf09dbc06dbb0738fe7fd5555aff0cf1346d67e9c0dc7f67->enter($__internal_a4efbb24c2425384bf09dbc06dbb0738fe7fd5555aff0cf1346d67e9c0dc7f67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e058d104a717ddee9ccf14bc9394ab4449701c15289012e84a35913b82773f8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e058d104a717ddee9ccf14bc9394ab4449701c15289012e84a35913b82773f8e->enter($__internal_e058d104a717ddee9ccf14bc9394ab4449701c15289012e84a35913b82773f8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $this->loadTemplate("navbar.html.twig", "MALrmBundle:Candidat:add_candidat.html.twig", 21)->display($context);
        // line 22
        echo "    <!-- END TOP NAVBAR -->
    <!-- START SIDEBAR-->
    ";
        // line 24
        $this->loadTemplate("sidebar.html.twig", "MALrmBundle:Candidat:add_candidat.html.twig", 24)->display($context);
        // line 25
        echo "    <!-- END SIDEBAR-->

    <div class=\"col-lg-9\" style=\"margin-left: 10px;\">
        <div class=\"row\">
            <h5>AJOUTER UN CANDIDAT:</h5>
        </div>
    </div>


</div>



";
        
        $__internal_e058d104a717ddee9ccf14bc9394ab4449701c15289012e84a35913b82773f8e->leave($__internal_e058d104a717ddee9ccf14bc9394ab4449701c15289012e84a35913b82773f8e_prof);

        
        $__internal_a4efbb24c2425384bf09dbc06dbb0738fe7fd5555aff0cf1346d67e9c0dc7f67->leave($__internal_a4efbb24c2425384bf09dbc06dbb0738fe7fd5555aff0cf1346d67e9c0dc7f67_prof);

    }

    // line 41
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f7c01eaf272a2db988fac1b0c9a2090f67b19e1f771c59be819b25d7e861aad4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7c01eaf272a2db988fac1b0c9a2090f67b19e1f771c59be819b25d7e861aad4->enter($__internal_f7c01eaf272a2db988fac1b0c9a2090f67b19e1f771c59be819b25d7e861aad4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_5c877d6f3c0bc9f5871f811752b6b6124d09765cb3497ebaeab55ecf61230d6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c877d6f3c0bc9f5871f811752b6b6124d09765cb3497ebaeab55ecf61230d6c->enter($__internal_5c877d6f3c0bc9f5871f811752b6b6124d09765cb3497ebaeab55ecf61230d6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_5c877d6f3c0bc9f5871f811752b6b6124d09765cb3497ebaeab55ecf61230d6c->leave($__internal_5c877d6f3c0bc9f5871f811752b6b6124d09765cb3497ebaeab55ecf61230d6c_prof);

        
        $__internal_f7c01eaf272a2db988fac1b0c9a2090f67b19e1f771c59be819b25d7e861aad4->leave($__internal_f7c01eaf272a2db988fac1b0c9a2090f67b19e1f771c59be819b25d7e861aad4_prof);

    }

    public function getTemplateName()
    {
        return "MALrmBundle:Candidat:add_candidat.html.twig";
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
{% endblock %}", "MALrmBundle:Candidat:add_candidat.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\LrmBundle/Resources/views/Candidat/add_candidat.html.twig");
    }
}
