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
        $__internal_ee6f4cc8ca89df10cffcb0587b7776ee3818598f40cbd5352346674ae3707e89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee6f4cc8ca89df10cffcb0587b7776ee3818598f40cbd5352346674ae3707e89->enter($__internal_ee6f4cc8ca89df10cffcb0587b7776ee3818598f40cbd5352346674ae3707e89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Candidat:add_candidat.html.twig"));

        $__internal_d870b6a19d34c8d42ac6ac0a3df8f73b34ad0b841f5bfbaa55082724e00e400b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d870b6a19d34c8d42ac6ac0a3df8f73b34ad0b841f5bfbaa55082724e00e400b->enter($__internal_d870b6a19d34c8d42ac6ac0a3df8f73b34ad0b841f5bfbaa55082724e00e400b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Candidat:add_candidat.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee6f4cc8ca89df10cffcb0587b7776ee3818598f40cbd5352346674ae3707e89->leave($__internal_ee6f4cc8ca89df10cffcb0587b7776ee3818598f40cbd5352346674ae3707e89_prof);

        
        $__internal_d870b6a19d34c8d42ac6ac0a3df8f73b34ad0b841f5bfbaa55082724e00e400b->leave($__internal_d870b6a19d34c8d42ac6ac0a3df8f73b34ad0b841f5bfbaa55082724e00e400b_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_26f76c6429f4de63a34c43978279cb2b094e4c2f8d5d13e1542eb5198f6901f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26f76c6429f4de63a34c43978279cb2b094e4c2f8d5d13e1542eb5198f6901f4->enter($__internal_26f76c6429f4de63a34c43978279cb2b094e4c2f8d5d13e1542eb5198f6901f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_8d458860a9af7aa38fe41e4858a499171ff85adf7abe478920d178337d7eab7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d458860a9af7aa38fe41e4858a499171ff85adf7abe478920d178337d7eab7a->enter($__internal_8d458860a9af7aa38fe41e4858a499171ff85adf7abe478920d178337d7eab7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "     <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/index.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
 ";
        
        $__internal_8d458860a9af7aa38fe41e4858a499171ff85adf7abe478920d178337d7eab7a->leave($__internal_8d458860a9af7aa38fe41e4858a499171ff85adf7abe478920d178337d7eab7a_prof);

        
        $__internal_26f76c6429f4de63a34c43978279cb2b094e4c2f8d5d13e1542eb5198f6901f4->leave($__internal_26f76c6429f4de63a34c43978279cb2b094e4c2f8d5d13e1542eb5198f6901f4_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_901d58992d3936fadb5c80fc5b48d6404736a16d27a5057c568fe14dc0cadb1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_901d58992d3936fadb5c80fc5b48d6404736a16d27a5057c568fe14dc0cadb1a->enter($__internal_901d58992d3936fadb5c80fc5b48d6404736a16d27a5057c568fe14dc0cadb1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8f86e6caec86baa330a1befc9c9eb3e5961cd5821e2c122bda39df4ebde5739b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f86e6caec86baa330a1befc9c9eb3e5961cd5821e2c122bda39df4ebde5739b->enter($__internal_8f86e6caec86baa330a1befc9c9eb3e5961cd5821e2c122bda39df4ebde5739b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8f86e6caec86baa330a1befc9c9eb3e5961cd5821e2c122bda39df4ebde5739b->leave($__internal_8f86e6caec86baa330a1befc9c9eb3e5961cd5821e2c122bda39df4ebde5739b_prof);

        
        $__internal_901d58992d3936fadb5c80fc5b48d6404736a16d27a5057c568fe14dc0cadb1a->leave($__internal_901d58992d3936fadb5c80fc5b48d6404736a16d27a5057c568fe14dc0cadb1a_prof);

    }

    // line 41
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1c1ac51b7413f32776d0f9e503dec2503f020f3716120a744f2999b0ffb828f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c1ac51b7413f32776d0f9e503dec2503f020f3716120a744f2999b0ffb828f3->enter($__internal_1c1ac51b7413f32776d0f9e503dec2503f020f3716120a744f2999b0ffb828f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_29dd3e32360981c7c5f99cf2de8a641d827dca476bf580d68cfb8a226b674856 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29dd3e32360981c7c5f99cf2de8a641d827dca476bf580d68cfb8a226b674856->enter($__internal_29dd3e32360981c7c5f99cf2de8a641d827dca476bf580d68cfb8a226b674856_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_29dd3e32360981c7c5f99cf2de8a641d827dca476bf580d68cfb8a226b674856->leave($__internal_29dd3e32360981c7c5f99cf2de8a641d827dca476bf580d68cfb8a226b674856_prof);

        
        $__internal_1c1ac51b7413f32776d0f9e503dec2503f020f3716120a744f2999b0ffb828f3->leave($__internal_1c1ac51b7413f32776d0f9e503dec2503f020f3716120a744f2999b0ffb828f3_prof);

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
