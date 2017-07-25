<?php

/* MALrmBundle:Accueil:index.html.twig */
class __TwigTemplate_a9186e13a5a8a29cc83e9f58ee8774fde3451b9df2fb9f3bf4a917cf4130b02a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MALrmBundle:Accueil:index.html.twig", 1);
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
        $__internal_93fd5091d75662e0c7d35d969ed1376690a1cff0a7b71d455f8c2203ccf869d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93fd5091d75662e0c7d35d969ed1376690a1cff0a7b71d455f8c2203ccf869d2->enter($__internal_93fd5091d75662e0c7d35d969ed1376690a1cff0a7b71d455f8c2203ccf869d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Accueil:index.html.twig"));

        $__internal_ba1a9f6755daf6b2b0bbcba60ba50a08a8357dbc9193ac57cd6785047e367a2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba1a9f6755daf6b2b0bbcba60ba50a08a8357dbc9193ac57cd6785047e367a2a->enter($__internal_ba1a9f6755daf6b2b0bbcba60ba50a08a8357dbc9193ac57cd6785047e367a2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Accueil:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93fd5091d75662e0c7d35d969ed1376690a1cff0a7b71d455f8c2203ccf869d2->leave($__internal_93fd5091d75662e0c7d35d969ed1376690a1cff0a7b71d455f8c2203ccf869d2_prof);

        
        $__internal_ba1a9f6755daf6b2b0bbcba60ba50a08a8357dbc9193ac57cd6785047e367a2a->leave($__internal_ba1a9f6755daf6b2b0bbcba60ba50a08a8357dbc9193ac57cd6785047e367a2a_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_870d8bf4778c18cbbb450e4dad0951c50c6411f76d1f0938605dd00e67ea0328 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_870d8bf4778c18cbbb450e4dad0951c50c6411f76d1f0938605dd00e67ea0328->enter($__internal_870d8bf4778c18cbbb450e4dad0951c50c6411f76d1f0938605dd00e67ea0328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_55d6a16ac67e45cb03e5baef601f7b9b9acf910cd246d257cbc890821fbde1c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55d6a16ac67e45cb03e5baef601f7b9b9acf910cd246d257cbc890821fbde1c0->enter($__internal_55d6a16ac67e45cb03e5baef601f7b9b9acf910cd246d257cbc890821fbde1c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "  <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/index.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
 ";
        
        $__internal_55d6a16ac67e45cb03e5baef601f7b9b9acf910cd246d257cbc890821fbde1c0->leave($__internal_55d6a16ac67e45cb03e5baef601f7b9b9acf910cd246d257cbc890821fbde1c0_prof);

        
        $__internal_870d8bf4778c18cbbb450e4dad0951c50c6411f76d1f0938605dd00e67ea0328->leave($__internal_870d8bf4778c18cbbb450e4dad0951c50c6411f76d1f0938605dd00e67ea0328_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_71c8f5753972b250a5eb986171a852410b10fc8e287883398f9444e34557e21c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71c8f5753972b250a5eb986171a852410b10fc8e287883398f9444e34557e21c->enter($__internal_71c8f5753972b250a5eb986171a852410b10fc8e287883398f9444e34557e21c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8dfebb89f2ed08f9baf24d4302877660ee4691b373d47ce6208dd70984a00a63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dfebb89f2ed08f9baf24d4302877660ee4691b373d47ce6208dd70984a00a63->enter($__internal_8dfebb89f2ed08f9baf24d4302877660ee4691b373d47ce6208dd70984a00a63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
 <div class=\"container-fluid\" id=\"header_container\">
  <div class=\"row\">
    ";
        // line 11
        if (((isset($context["register"]) ? $context["register"] : $this->getContext($context, "register")) == true)) {
            // line 12
            echo "     <div class=\"col-lg-offset-6\">
      ";
            // line 13
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
                // line 14
                echo "       Connecté en tant que ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
                echo "--<a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
                echo "\">Déconnexion</a>
      ";
            } else {
                // line 16
                echo "       <a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
                echo "\">Connexion</a>
      ";
            }
            // line 18
            echo "      -- Créer un nouvel utilisateur --<a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ma_lrm_register");
            echo "\"> Créer un compte </a>
     </div>
    ";
        } else {
            // line 21
            echo "     <div class=\"col-lg-offset-9\">
      ";
            // line 22
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
                // line 23
                echo "       Connecté en tant que ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
                echo "--<a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
                echo "\">Déconnexion</a>
      ";
            } else {
                // line 25
                echo "       <a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
                echo "\">Connexion</a>
      ";
            }
            // line 27
            echo "     </div>
    ";
        }
        // line 29
        echo "  </div>
 </div>
 <div class=\"container-fluid\" id=\"main_container\">
  <!-- START TOP NAVBAR-->
  ";
        // line 33
        $this->loadTemplate("navbar.html.twig", "MALrmBundle:Accueil:index.html.twig", 33)->display($context);
        // line 34
        echo "  <!-- END TOP NAVBAR -->
  <!-- START SIDEBAR-->
  ";
        // line 36
        $this->loadTemplate("sidebar.html.twig", "MALrmBundle:Accueil:index.html.twig", 36)->display($context);
        // line 37
        echo "  <!-- END SIDEBAR-->

  <div class=\"col-lg-9\" style=\"margin-left: 10px;\">
   <div class=\"row\">
    <h3>TABLEAU DE BORD</h3><hr style=\"border: 1px solid darkgray;\">
   </div>
   <div class=\"row\">
    <h5>LES RELANCES CANDIDATS:</h5>
   </div>
  </div>

</div>



";
        
        $__internal_8dfebb89f2ed08f9baf24d4302877660ee4691b373d47ce6208dd70984a00a63->leave($__internal_8dfebb89f2ed08f9baf24d4302877660ee4691b373d47ce6208dd70984a00a63_prof);

        
        $__internal_71c8f5753972b250a5eb986171a852410b10fc8e287883398f9444e34557e21c->leave($__internal_71c8f5753972b250a5eb986171a852410b10fc8e287883398f9444e34557e21c_prof);

    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2d05d424f7edf351c32c2ce4c9aa950ef554a41c57f4ef80bd79d3dea3bbb9dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d05d424f7edf351c32c2ce4c9aa950ef554a41c57f4ef80bd79d3dea3bbb9dd->enter($__internal_2d05d424f7edf351c32c2ce4c9aa950ef554a41c57f4ef80bd79d3dea3bbb9dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_9255ce67de8bb416b273e5b57088771283ceb54ceef2363195853e1ef161be01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9255ce67de8bb416b273e5b57088771283ceb54ceef2363195853e1ef161be01->enter($__internal_9255ce67de8bb416b273e5b57088771283ceb54ceef2363195853e1ef161be01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_9255ce67de8bb416b273e5b57088771283ceb54ceef2363195853e1ef161be01->leave($__internal_9255ce67de8bb416b273e5b57088771283ceb54ceef2363195853e1ef161be01_prof);

        
        $__internal_2d05d424f7edf351c32c2ce4c9aa950ef554a41c57f4ef80bd79d3dea3bbb9dd->leave($__internal_2d05d424f7edf351c32c2ce4c9aa950ef554a41c57f4ef80bd79d3dea3bbb9dd_prof);

    }

    public function getTemplateName()
    {
        return "MALrmBundle:Accueil:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 55,  143 => 37,  141 => 36,  137 => 34,  135 => 33,  129 => 29,  125 => 27,  119 => 25,  111 => 23,  109 => 22,  106 => 21,  99 => 18,  93 => 16,  85 => 14,  83 => 13,  80 => 12,  78 => 11,  73 => 8,  64 => 7,  51 => 4,  42 => 3,  11 => 1,);
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

 <div class=\"container-fluid\" id=\"header_container\">
  <div class=\"row\">
    {% if register == true %}
     <div class=\"col-lg-offset-6\">
      {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
       Connecté en tant que {{ app.user.username }}--<a href=\"{{ path('fos_user_security_logout') }}\">Déconnexion</a>
      {% else %}
       <a href=\"{{ path('fos_user_security_login') }}\">Connexion</a>
      {% endif %}
      -- Créer un nouvel utilisateur --<a href=\"{{ path('ma_lrm_register') }}\"> Créer un compte </a>
     </div>
    {% else %}
     <div class=\"col-lg-offset-9\">
      {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
       Connecté en tant que {{ app.user.username }}--<a href=\"{{ path('fos_user_security_logout') }}\">Déconnexion</a>
      {% else %}
       <a href=\"{{ path('fos_user_security_login') }}\">Connexion</a>
      {% endif %}
     </div>
    {% endif %}
  </div>
 </div>
 <div class=\"container-fluid\" id=\"main_container\">
  <!-- START TOP NAVBAR-->
  {% include 'navbar.html.twig' %}
  <!-- END TOP NAVBAR -->
  <!-- START SIDEBAR-->
  {% include 'sidebar.html.twig' %}
  <!-- END SIDEBAR-->

  <div class=\"col-lg-9\" style=\"margin-left: 10px;\">
   <div class=\"row\">
    <h3>TABLEAU DE BORD</h3><hr style=\"border: 1px solid darkgray;\">
   </div>
   <div class=\"row\">
    <h5>LES RELANCES CANDIDATS:</h5>
   </div>
  </div>

</div>



{% endblock %}


{% block javascripts %}
{% endblock %}", "MALrmBundle:Accueil:index.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\LrmBundle\\Resources\\views\\Accueil\\index.html.twig");
    }
}
