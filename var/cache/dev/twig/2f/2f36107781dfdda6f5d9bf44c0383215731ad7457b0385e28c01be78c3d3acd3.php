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
        $__internal_4a399fac317286afa7cd8dc5265c6077c74f8c9f535c3a99bd66a9bd8572d2ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a399fac317286afa7cd8dc5265c6077c74f8c9f535c3a99bd66a9bd8572d2ce->enter($__internal_4a399fac317286afa7cd8dc5265c6077c74f8c9f535c3a99bd66a9bd8572d2ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Candidat:add_candidat.html.twig"));

        $__internal_7e6ecc50a33e8954be2bcd6fb4da4dae2aae3cea6f6c6f4b3c56876bf4da06bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e6ecc50a33e8954be2bcd6fb4da4dae2aae3cea6f6c6f4b3c56876bf4da06bc->enter($__internal_7e6ecc50a33e8954be2bcd6fb4da4dae2aae3cea6f6c6f4b3c56876bf4da06bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Candidat:add_candidat.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a399fac317286afa7cd8dc5265c6077c74f8c9f535c3a99bd66a9bd8572d2ce->leave($__internal_4a399fac317286afa7cd8dc5265c6077c74f8c9f535c3a99bd66a9bd8572d2ce_prof);

        
        $__internal_7e6ecc50a33e8954be2bcd6fb4da4dae2aae3cea6f6c6f4b3c56876bf4da06bc->leave($__internal_7e6ecc50a33e8954be2bcd6fb4da4dae2aae3cea6f6c6f4b3c56876bf4da06bc_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_54d0980b54eaf1ff9a024309cc493d1339751ad0b46e323f586762494994b7f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54d0980b54eaf1ff9a024309cc493d1339751ad0b46e323f586762494994b7f0->enter($__internal_54d0980b54eaf1ff9a024309cc493d1339751ad0b46e323f586762494994b7f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_de890ab45651b94d0e73afa3f29d79ded2bf3c7c53390076500af1825890f861 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de890ab45651b94d0e73afa3f29d79ded2bf3c7c53390076500af1825890f861->enter($__internal_de890ab45651b94d0e73afa3f29d79ded2bf3c7c53390076500af1825890f861_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "     <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/index.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
 ";
        
        $__internal_de890ab45651b94d0e73afa3f29d79ded2bf3c7c53390076500af1825890f861->leave($__internal_de890ab45651b94d0e73afa3f29d79ded2bf3c7c53390076500af1825890f861_prof);

        
        $__internal_54d0980b54eaf1ff9a024309cc493d1339751ad0b46e323f586762494994b7f0->leave($__internal_54d0980b54eaf1ff9a024309cc493d1339751ad0b46e323f586762494994b7f0_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_bc0cde0c0d50e7fee7ae5f5e5db4835575fbd4d8d7bfcba95e743a20b6c8ac6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc0cde0c0d50e7fee7ae5f5e5db4835575fbd4d8d7bfcba95e743a20b6c8ac6d->enter($__internal_bc0cde0c0d50e7fee7ae5f5e5db4835575fbd4d8d7bfcba95e743a20b6c8ac6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0d642b421ee9df10aae2126d3b19c678af7057dc37f1be564c107a5eda5bc4a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d642b421ee9df10aae2126d3b19c678af7057dc37f1be564c107a5eda5bc4a0->enter($__internal_0d642b421ee9df10aae2126d3b19c678af7057dc37f1be564c107a5eda5bc4a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0d642b421ee9df10aae2126d3b19c678af7057dc37f1be564c107a5eda5bc4a0->leave($__internal_0d642b421ee9df10aae2126d3b19c678af7057dc37f1be564c107a5eda5bc4a0_prof);

        
        $__internal_bc0cde0c0d50e7fee7ae5f5e5db4835575fbd4d8d7bfcba95e743a20b6c8ac6d->leave($__internal_bc0cde0c0d50e7fee7ae5f5e5db4835575fbd4d8d7bfcba95e743a20b6c8ac6d_prof);

    }

    // line 41
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2aa47362615d24d6cc04ed036efd7b0a205053a87c7c04777d0212771185235d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2aa47362615d24d6cc04ed036efd7b0a205053a87c7c04777d0212771185235d->enter($__internal_2aa47362615d24d6cc04ed036efd7b0a205053a87c7c04777d0212771185235d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_55aa3bf3dff4831807a12d708351bd8a9a9df475eac84f67953417d3f0d2a353 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55aa3bf3dff4831807a12d708351bd8a9a9df475eac84f67953417d3f0d2a353->enter($__internal_55aa3bf3dff4831807a12d708351bd8a9a9df475eac84f67953417d3f0d2a353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_55aa3bf3dff4831807a12d708351bd8a9a9df475eac84f67953417d3f0d2a353->leave($__internal_55aa3bf3dff4831807a12d708351bd8a9a9df475eac84f67953417d3f0d2a353_prof);

        
        $__internal_2aa47362615d24d6cc04ed036efd7b0a205053a87c7c04777d0212771185235d->leave($__internal_2aa47362615d24d6cc04ed036efd7b0a205053a87c7c04777d0212771185235d_prof);

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
