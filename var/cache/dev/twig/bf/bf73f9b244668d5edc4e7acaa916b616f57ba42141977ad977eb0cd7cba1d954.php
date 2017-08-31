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
        $__internal_0701a278bddd143b381b89fc457b41671ed63c1579f48728642624607005d964 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0701a278bddd143b381b89fc457b41671ed63c1579f48728642624607005d964->enter($__internal_0701a278bddd143b381b89fc457b41671ed63c1579f48728642624607005d964_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MALrm/Candidat/add_candidat.html.twig"));

        $__internal_0dc6350b1f1fdc17a53fcd229a5d8b0dcab55463be3a5fdd4fadb8bdbf73122a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dc6350b1f1fdc17a53fcd229a5d8b0dcab55463be3a5fdd4fadb8bdbf73122a->enter($__internal_0dc6350b1f1fdc17a53fcd229a5d8b0dcab55463be3a5fdd4fadb8bdbf73122a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MALrm/Candidat/add_candidat.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0701a278bddd143b381b89fc457b41671ed63c1579f48728642624607005d964->leave($__internal_0701a278bddd143b381b89fc457b41671ed63c1579f48728642624607005d964_prof);

        
        $__internal_0dc6350b1f1fdc17a53fcd229a5d8b0dcab55463be3a5fdd4fadb8bdbf73122a->leave($__internal_0dc6350b1f1fdc17a53fcd229a5d8b0dcab55463be3a5fdd4fadb8bdbf73122a_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f33bc78dd74022f25a3d864f77b80a5cf0b72141c9522593d2c014a1f0c99e64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f33bc78dd74022f25a3d864f77b80a5cf0b72141c9522593d2c014a1f0c99e64->enter($__internal_f33bc78dd74022f25a3d864f77b80a5cf0b72141c9522593d2c014a1f0c99e64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_2ae28d9cfabec17dcadf0a05eabc3cd8a85539a8cb577ddd78ce0406a8a52daf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ae28d9cfabec17dcadf0a05eabc3cd8a85539a8cb577ddd78ce0406a8a52daf->enter($__internal_2ae28d9cfabec17dcadf0a05eabc3cd8a85539a8cb577ddd78ce0406a8a52daf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "     <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/index.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
 ";
        
        $__internal_2ae28d9cfabec17dcadf0a05eabc3cd8a85539a8cb577ddd78ce0406a8a52daf->leave($__internal_2ae28d9cfabec17dcadf0a05eabc3cd8a85539a8cb577ddd78ce0406a8a52daf_prof);

        
        $__internal_f33bc78dd74022f25a3d864f77b80a5cf0b72141c9522593d2c014a1f0c99e64->leave($__internal_f33bc78dd74022f25a3d864f77b80a5cf0b72141c9522593d2c014a1f0c99e64_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_41f7a15adb52cb9b58cca63030cc78020c7cfd61e5367ea406dde8697d3fbe54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41f7a15adb52cb9b58cca63030cc78020c7cfd61e5367ea406dde8697d3fbe54->enter($__internal_41f7a15adb52cb9b58cca63030cc78020c7cfd61e5367ea406dde8697d3fbe54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3d098cab5f019454ef8fd87e851de3e73906f63abac1413e93179554ddc947ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d098cab5f019454ef8fd87e851de3e73906f63abac1413e93179554ddc947ee->enter($__internal_3d098cab5f019454ef8fd87e851de3e73906f63abac1413e93179554ddc947ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3d098cab5f019454ef8fd87e851de3e73906f63abac1413e93179554ddc947ee->leave($__internal_3d098cab5f019454ef8fd87e851de3e73906f63abac1413e93179554ddc947ee_prof);

        
        $__internal_41f7a15adb52cb9b58cca63030cc78020c7cfd61e5367ea406dde8697d3fbe54->leave($__internal_41f7a15adb52cb9b58cca63030cc78020c7cfd61e5367ea406dde8697d3fbe54_prof);

    }

    // line 41
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d1a96c49fa5bd2386be28de89bcc4829cb29a6eff84d1f581ae68391adcde2fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1a96c49fa5bd2386be28de89bcc4829cb29a6eff84d1f581ae68391adcde2fb->enter($__internal_d1a96c49fa5bd2386be28de89bcc4829cb29a6eff84d1f581ae68391adcde2fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_5d5bb34bb244255c2e6d2a37510124dfceed676cf84e80c7757cdfd01355d153 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d5bb34bb244255c2e6d2a37510124dfceed676cf84e80c7757cdfd01355d153->enter($__internal_5d5bb34bb244255c2e6d2a37510124dfceed676cf84e80c7757cdfd01355d153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_5d5bb34bb244255c2e6d2a37510124dfceed676cf84e80c7757cdfd01355d153->leave($__internal_5d5bb34bb244255c2e6d2a37510124dfceed676cf84e80c7757cdfd01355d153_prof);

        
        $__internal_d1a96c49fa5bd2386be28de89bcc4829cb29a6eff84d1f581ae68391adcde2fb->leave($__internal_d1a96c49fa5bd2386be28de89bcc4829cb29a6eff84d1f581ae68391adcde2fb_prof);

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
