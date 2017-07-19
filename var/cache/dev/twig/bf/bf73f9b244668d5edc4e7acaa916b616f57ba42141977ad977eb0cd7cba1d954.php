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
        $__internal_b0cbe6fd0d063aa5bda61cdac1c7fcf1854f0df15ed130d1e06f353f8ae863a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0cbe6fd0d063aa5bda61cdac1c7fcf1854f0df15ed130d1e06f353f8ae863a9->enter($__internal_b0cbe6fd0d063aa5bda61cdac1c7fcf1854f0df15ed130d1e06f353f8ae863a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MALrm/Candidat/add_candidat.html.twig"));

        $__internal_3564a5c5be3a6342bf7bac5ac1280d04a18f4e3e47537f27f348a2e0eafc989c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3564a5c5be3a6342bf7bac5ac1280d04a18f4e3e47537f27f348a2e0eafc989c->enter($__internal_3564a5c5be3a6342bf7bac5ac1280d04a18f4e3e47537f27f348a2e0eafc989c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MALrm/Candidat/add_candidat.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b0cbe6fd0d063aa5bda61cdac1c7fcf1854f0df15ed130d1e06f353f8ae863a9->leave($__internal_b0cbe6fd0d063aa5bda61cdac1c7fcf1854f0df15ed130d1e06f353f8ae863a9_prof);

        
        $__internal_3564a5c5be3a6342bf7bac5ac1280d04a18f4e3e47537f27f348a2e0eafc989c->leave($__internal_3564a5c5be3a6342bf7bac5ac1280d04a18f4e3e47537f27f348a2e0eafc989c_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_dd8a2101782a4b8639eaf54098e4e7064e1a249f2c6005167baca0b3d51246fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd8a2101782a4b8639eaf54098e4e7064e1a249f2c6005167baca0b3d51246fd->enter($__internal_dd8a2101782a4b8639eaf54098e4e7064e1a249f2c6005167baca0b3d51246fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_3e3644b640aa78dc0fea8ef1b2ead3627948e76a601df8227635227f3f78b62c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e3644b640aa78dc0fea8ef1b2ead3627948e76a601df8227635227f3f78b62c->enter($__internal_3e3644b640aa78dc0fea8ef1b2ead3627948e76a601df8227635227f3f78b62c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "     <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/index.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
 ";
        
        $__internal_3e3644b640aa78dc0fea8ef1b2ead3627948e76a601df8227635227f3f78b62c->leave($__internal_3e3644b640aa78dc0fea8ef1b2ead3627948e76a601df8227635227f3f78b62c_prof);

        
        $__internal_dd8a2101782a4b8639eaf54098e4e7064e1a249f2c6005167baca0b3d51246fd->leave($__internal_dd8a2101782a4b8639eaf54098e4e7064e1a249f2c6005167baca0b3d51246fd_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_5c38b0423d63c2d3c984a353fe9486f9907c8ea10fbdd51a859331d9d71a7065 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c38b0423d63c2d3c984a353fe9486f9907c8ea10fbdd51a859331d9d71a7065->enter($__internal_5c38b0423d63c2d3c984a353fe9486f9907c8ea10fbdd51a859331d9d71a7065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2085661f7fae2040c830700ce08e01df15180fde763e9ed77462f0edc436e60b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2085661f7fae2040c830700ce08e01df15180fde763e9ed77462f0edc436e60b->enter($__internal_2085661f7fae2040c830700ce08e01df15180fde763e9ed77462f0edc436e60b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2085661f7fae2040c830700ce08e01df15180fde763e9ed77462f0edc436e60b->leave($__internal_2085661f7fae2040c830700ce08e01df15180fde763e9ed77462f0edc436e60b_prof);

        
        $__internal_5c38b0423d63c2d3c984a353fe9486f9907c8ea10fbdd51a859331d9d71a7065->leave($__internal_5c38b0423d63c2d3c984a353fe9486f9907c8ea10fbdd51a859331d9d71a7065_prof);

    }

    // line 41
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e82b47e4455502bc8aa52f296e8dd55b433c098f83dcb59c4246f40bd445edae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e82b47e4455502bc8aa52f296e8dd55b433c098f83dcb59c4246f40bd445edae->enter($__internal_e82b47e4455502bc8aa52f296e8dd55b433c098f83dcb59c4246f40bd445edae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ce454008680c0d3d08c3a9c87282f780afe3a59cd006bb055950c9dac6826e18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce454008680c0d3d08c3a9c87282f780afe3a59cd006bb055950c9dac6826e18->enter($__internal_ce454008680c0d3d08c3a9c87282f780afe3a59cd006bb055950c9dac6826e18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ce454008680c0d3d08c3a9c87282f780afe3a59cd006bb055950c9dac6826e18->leave($__internal_ce454008680c0d3d08c3a9c87282f780afe3a59cd006bb055950c9dac6826e18_prof);

        
        $__internal_e82b47e4455502bc8aa52f296e8dd55b433c098f83dcb59c4246f40bd445edae->leave($__internal_e82b47e4455502bc8aa52f296e8dd55b433c098f83dcb59c4246f40bd445edae_prof);

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
