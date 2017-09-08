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
        $__internal_50f60ff099ea345bf395a84833fab35f40a750117d11b64aab81730831f7e9c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50f60ff099ea345bf395a84833fab35f40a750117d11b64aab81730831f7e9c4->enter($__internal_50f60ff099ea345bf395a84833fab35f40a750117d11b64aab81730831f7e9c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Candidat:add_candidat.html.twig"));

        $__internal_6d4a7b89a9fe56520c4cede4049e7df4b122cced7f8a0fb4ad1cd6329a1523c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d4a7b89a9fe56520c4cede4049e7df4b122cced7f8a0fb4ad1cd6329a1523c7->enter($__internal_6d4a7b89a9fe56520c4cede4049e7df4b122cced7f8a0fb4ad1cd6329a1523c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Candidat:add_candidat.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_50f60ff099ea345bf395a84833fab35f40a750117d11b64aab81730831f7e9c4->leave($__internal_50f60ff099ea345bf395a84833fab35f40a750117d11b64aab81730831f7e9c4_prof);

        
        $__internal_6d4a7b89a9fe56520c4cede4049e7df4b122cced7f8a0fb4ad1cd6329a1523c7->leave($__internal_6d4a7b89a9fe56520c4cede4049e7df4b122cced7f8a0fb4ad1cd6329a1523c7_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2b5f26e5a49d1ef0fb5d379d301cea500867d374968dbd34d6bcafb5fe7fec34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b5f26e5a49d1ef0fb5d379d301cea500867d374968dbd34d6bcafb5fe7fec34->enter($__internal_2b5f26e5a49d1ef0fb5d379d301cea500867d374968dbd34d6bcafb5fe7fec34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_23828954785d8b6e82fc6d5bea391cc7ebbf73d712da35c0509b51b36ddd3bbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23828954785d8b6e82fc6d5bea391cc7ebbf73d712da35c0509b51b36ddd3bbe->enter($__internal_23828954785d8b6e82fc6d5bea391cc7ebbf73d712da35c0509b51b36ddd3bbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "     <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/index.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
 ";
        
        $__internal_23828954785d8b6e82fc6d5bea391cc7ebbf73d712da35c0509b51b36ddd3bbe->leave($__internal_23828954785d8b6e82fc6d5bea391cc7ebbf73d712da35c0509b51b36ddd3bbe_prof);

        
        $__internal_2b5f26e5a49d1ef0fb5d379d301cea500867d374968dbd34d6bcafb5fe7fec34->leave($__internal_2b5f26e5a49d1ef0fb5d379d301cea500867d374968dbd34d6bcafb5fe7fec34_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_e1b1658807164526747fd4b9555c7c411327ab23c7796f4e3bef0348a9d66cb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1b1658807164526747fd4b9555c7c411327ab23c7796f4e3bef0348a9d66cb0->enter($__internal_e1b1658807164526747fd4b9555c7c411327ab23c7796f4e3bef0348a9d66cb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c6831184ca0debb7242a7ced64a5dbd2502663807f084d9be66d4d8bf959163f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6831184ca0debb7242a7ced64a5dbd2502663807f084d9be66d4d8bf959163f->enter($__internal_c6831184ca0debb7242a7ced64a5dbd2502663807f084d9be66d4d8bf959163f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c6831184ca0debb7242a7ced64a5dbd2502663807f084d9be66d4d8bf959163f->leave($__internal_c6831184ca0debb7242a7ced64a5dbd2502663807f084d9be66d4d8bf959163f_prof);

        
        $__internal_e1b1658807164526747fd4b9555c7c411327ab23c7796f4e3bef0348a9d66cb0->leave($__internal_e1b1658807164526747fd4b9555c7c411327ab23c7796f4e3bef0348a9d66cb0_prof);

    }

    // line 41
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_faf37ac89a8c12cf94fe2e5543c6fe52a41f507648e5d6d4547e184d5bbeccf4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_faf37ac89a8c12cf94fe2e5543c6fe52a41f507648e5d6d4547e184d5bbeccf4->enter($__internal_faf37ac89a8c12cf94fe2e5543c6fe52a41f507648e5d6d4547e184d5bbeccf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_966e68ac7d5edb07065ed81cab6f0eff5e6ce92dcffc95fb0bebff873d3ca58d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_966e68ac7d5edb07065ed81cab6f0eff5e6ce92dcffc95fb0bebff873d3ca58d->enter($__internal_966e68ac7d5edb07065ed81cab6f0eff5e6ce92dcffc95fb0bebff873d3ca58d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_966e68ac7d5edb07065ed81cab6f0eff5e6ce92dcffc95fb0bebff873d3ca58d->leave($__internal_966e68ac7d5edb07065ed81cab6f0eff5e6ce92dcffc95fb0bebff873d3ca58d_prof);

        
        $__internal_faf37ac89a8c12cf94fe2e5543c6fe52a41f507648e5d6d4547e184d5bbeccf4->leave($__internal_faf37ac89a8c12cf94fe2e5543c6fe52a41f507648e5d6d4547e184d5bbeccf4_prof);

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
