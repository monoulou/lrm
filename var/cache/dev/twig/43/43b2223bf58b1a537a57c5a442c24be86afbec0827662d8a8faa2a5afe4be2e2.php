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
        $__internal_a2b1a91dc43ab0cee409706e9a814190a0829172433e734a7a13c271a85e37da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2b1a91dc43ab0cee409706e9a814190a0829172433e734a7a13c271a85e37da->enter($__internal_a2b1a91dc43ab0cee409706e9a814190a0829172433e734a7a13c271a85e37da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Accueil:index.html.twig"));

        $__internal_a15525ab3c8ef620f807018ede54a8097435829f7968a4989baa3fa70959305a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a15525ab3c8ef620f807018ede54a8097435829f7968a4989baa3fa70959305a->enter($__internal_a15525ab3c8ef620f807018ede54a8097435829f7968a4989baa3fa70959305a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Accueil:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2b1a91dc43ab0cee409706e9a814190a0829172433e734a7a13c271a85e37da->leave($__internal_a2b1a91dc43ab0cee409706e9a814190a0829172433e734a7a13c271a85e37da_prof);

        
        $__internal_a15525ab3c8ef620f807018ede54a8097435829f7968a4989baa3fa70959305a->leave($__internal_a15525ab3c8ef620f807018ede54a8097435829f7968a4989baa3fa70959305a_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_41869a23954f7aad4c4a3e1bb7aaef8bdacc64f7133ff5900373ff97e50c16a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41869a23954f7aad4c4a3e1bb7aaef8bdacc64f7133ff5900373ff97e50c16a6->enter($__internal_41869a23954f7aad4c4a3e1bb7aaef8bdacc64f7133ff5900373ff97e50c16a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_16148be3380f2ac8c8c913478ad3e1bc0c559f258775644dc118f6d623498a0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16148be3380f2ac8c8c913478ad3e1bc0c559f258775644dc118f6d623498a0a->enter($__internal_16148be3380f2ac8c8c913478ad3e1bc0c559f258775644dc118f6d623498a0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "  <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/index.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
 ";
        
        $__internal_16148be3380f2ac8c8c913478ad3e1bc0c559f258775644dc118f6d623498a0a->leave($__internal_16148be3380f2ac8c8c913478ad3e1bc0c559f258775644dc118f6d623498a0a_prof);

        
        $__internal_41869a23954f7aad4c4a3e1bb7aaef8bdacc64f7133ff5900373ff97e50c16a6->leave($__internal_41869a23954f7aad4c4a3e1bb7aaef8bdacc64f7133ff5900373ff97e50c16a6_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_6dc9f43e3b708c128fcf57d42345d0d5f0b35306266ee377ad9a949125ab83a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6dc9f43e3b708c128fcf57d42345d0d5f0b35306266ee377ad9a949125ab83a7->enter($__internal_6dc9f43e3b708c128fcf57d42345d0d5f0b35306266ee377ad9a949125ab83a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6ac8bd4ba0052c3e662c39ab36a529e2e6a87b8f2e6d3fc4df426fd742498da4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ac8bd4ba0052c3e662c39ab36a529e2e6a87b8f2e6d3fc4df426fd742498da4->enter($__internal_6ac8bd4ba0052c3e662c39ab36a529e2e6a87b8f2e6d3fc4df426fd742498da4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6ac8bd4ba0052c3e662c39ab36a529e2e6a87b8f2e6d3fc4df426fd742498da4->leave($__internal_6ac8bd4ba0052c3e662c39ab36a529e2e6a87b8f2e6d3fc4df426fd742498da4_prof);

        
        $__internal_6dc9f43e3b708c128fcf57d42345d0d5f0b35306266ee377ad9a949125ab83a7->leave($__internal_6dc9f43e3b708c128fcf57d42345d0d5f0b35306266ee377ad9a949125ab83a7_prof);

    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9da2dd4fb7c8377d039bce2416643405db825766e327ec31f35936e2bdeaa313 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9da2dd4fb7c8377d039bce2416643405db825766e327ec31f35936e2bdeaa313->enter($__internal_9da2dd4fb7c8377d039bce2416643405db825766e327ec31f35936e2bdeaa313_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_bcd34c363f299fdda6cbc5589c69f3473d951e4cab4d11a720e81877caeb1528 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcd34c363f299fdda6cbc5589c69f3473d951e4cab4d11a720e81877caeb1528->enter($__internal_bcd34c363f299fdda6cbc5589c69f3473d951e4cab4d11a720e81877caeb1528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_bcd34c363f299fdda6cbc5589c69f3473d951e4cab4d11a720e81877caeb1528->leave($__internal_bcd34c363f299fdda6cbc5589c69f3473d951e4cab4d11a720e81877caeb1528_prof);

        
        $__internal_9da2dd4fb7c8377d039bce2416643405db825766e327ec31f35936e2bdeaa313->leave($__internal_9da2dd4fb7c8377d039bce2416643405db825766e327ec31f35936e2bdeaa313_prof);

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
