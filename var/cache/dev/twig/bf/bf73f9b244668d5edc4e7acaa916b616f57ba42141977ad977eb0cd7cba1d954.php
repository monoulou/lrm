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
        $__internal_eb8f5518de59a4251031f9d695379bad9ccde00ee870463e5c5880a2355763a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb8f5518de59a4251031f9d695379bad9ccde00ee870463e5c5880a2355763a9->enter($__internal_eb8f5518de59a4251031f9d695379bad9ccde00ee870463e5c5880a2355763a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MALrm/Candidat/add_candidat.html.twig"));

        $__internal_bb5d284d76a0f4b837b5399e970eda782521adbe3f6be7d861bb9eb0eb115e54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb5d284d76a0f4b837b5399e970eda782521adbe3f6be7d861bb9eb0eb115e54->enter($__internal_bb5d284d76a0f4b837b5399e970eda782521adbe3f6be7d861bb9eb0eb115e54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MALrm/Candidat/add_candidat.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb8f5518de59a4251031f9d695379bad9ccde00ee870463e5c5880a2355763a9->leave($__internal_eb8f5518de59a4251031f9d695379bad9ccde00ee870463e5c5880a2355763a9_prof);

        
        $__internal_bb5d284d76a0f4b837b5399e970eda782521adbe3f6be7d861bb9eb0eb115e54->leave($__internal_bb5d284d76a0f4b837b5399e970eda782521adbe3f6be7d861bb9eb0eb115e54_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_75b61c441a37f8e3a7a991de81ff6ae78a8978e1cd0b8afc8109a09aff291da0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75b61c441a37f8e3a7a991de81ff6ae78a8978e1cd0b8afc8109a09aff291da0->enter($__internal_75b61c441a37f8e3a7a991de81ff6ae78a8978e1cd0b8afc8109a09aff291da0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_12de40f1b370fe4a0e0bc8f296d14fe96ed2a7b8e86a16ba9bb70ed4d67054e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12de40f1b370fe4a0e0bc8f296d14fe96ed2a7b8e86a16ba9bb70ed4d67054e2->enter($__internal_12de40f1b370fe4a0e0bc8f296d14fe96ed2a7b8e86a16ba9bb70ed4d67054e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "     <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/index.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
 ";
        
        $__internal_12de40f1b370fe4a0e0bc8f296d14fe96ed2a7b8e86a16ba9bb70ed4d67054e2->leave($__internal_12de40f1b370fe4a0e0bc8f296d14fe96ed2a7b8e86a16ba9bb70ed4d67054e2_prof);

        
        $__internal_75b61c441a37f8e3a7a991de81ff6ae78a8978e1cd0b8afc8109a09aff291da0->leave($__internal_75b61c441a37f8e3a7a991de81ff6ae78a8978e1cd0b8afc8109a09aff291da0_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_67c2fee123b464e4f19219ae6423b656d182b7efac1ad04c4e145189f6a48847 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67c2fee123b464e4f19219ae6423b656d182b7efac1ad04c4e145189f6a48847->enter($__internal_67c2fee123b464e4f19219ae6423b656d182b7efac1ad04c4e145189f6a48847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ce010946be5bc955e28f97c34bbb0e16fe09b64aafa4af82117b67e07dcbef9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce010946be5bc955e28f97c34bbb0e16fe09b64aafa4af82117b67e07dcbef9b->enter($__internal_ce010946be5bc955e28f97c34bbb0e16fe09b64aafa4af82117b67e07dcbef9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ce010946be5bc955e28f97c34bbb0e16fe09b64aafa4af82117b67e07dcbef9b->leave($__internal_ce010946be5bc955e28f97c34bbb0e16fe09b64aafa4af82117b67e07dcbef9b_prof);

        
        $__internal_67c2fee123b464e4f19219ae6423b656d182b7efac1ad04c4e145189f6a48847->leave($__internal_67c2fee123b464e4f19219ae6423b656d182b7efac1ad04c4e145189f6a48847_prof);

    }

    // line 41
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_becf6a7e220933e6b6ed3f56e0ae133fad556ed3b612dec7dfb3234c2eba870e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_becf6a7e220933e6b6ed3f56e0ae133fad556ed3b612dec7dfb3234c2eba870e->enter($__internal_becf6a7e220933e6b6ed3f56e0ae133fad556ed3b612dec7dfb3234c2eba870e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ccb08aa9a0446d560ab2e543ba1e3c14d6916be66fc71e409491feecf673a48d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccb08aa9a0446d560ab2e543ba1e3c14d6916be66fc71e409491feecf673a48d->enter($__internal_ccb08aa9a0446d560ab2e543ba1e3c14d6916be66fc71e409491feecf673a48d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ccb08aa9a0446d560ab2e543ba1e3c14d6916be66fc71e409491feecf673a48d->leave($__internal_ccb08aa9a0446d560ab2e543ba1e3c14d6916be66fc71e409491feecf673a48d_prof);

        
        $__internal_becf6a7e220933e6b6ed3f56e0ae133fad556ed3b612dec7dfb3234c2eba870e->leave($__internal_becf6a7e220933e6b6ed3f56e0ae133fad556ed3b612dec7dfb3234c2eba870e_prof);

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
