<?php

/* MALrmBundle:Accueil:index.html.twig */
class __TwigTemplate_40f3eb3f8494005fceb6e440809e56d81ec4d3e438d274daeb57884d2ff8271b extends Twig_Template
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
        $__internal_03b84e2d7ad4080664ad7ef65acf125b434848318e0f3c5b40b7663a1096b7d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03b84e2d7ad4080664ad7ef65acf125b434848318e0f3c5b40b7663a1096b7d3->enter($__internal_03b84e2d7ad4080664ad7ef65acf125b434848318e0f3c5b40b7663a1096b7d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Accueil:index.html.twig"));

        $__internal_6101f1c59ced5463152ba8a2bd979dcf84aaea7699318fc6f2e5b0ed010274f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6101f1c59ced5463152ba8a2bd979dcf84aaea7699318fc6f2e5b0ed010274f1->enter($__internal_6101f1c59ced5463152ba8a2bd979dcf84aaea7699318fc6f2e5b0ed010274f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Accueil:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03b84e2d7ad4080664ad7ef65acf125b434848318e0f3c5b40b7663a1096b7d3->leave($__internal_03b84e2d7ad4080664ad7ef65acf125b434848318e0f3c5b40b7663a1096b7d3_prof);

        
        $__internal_6101f1c59ced5463152ba8a2bd979dcf84aaea7699318fc6f2e5b0ed010274f1->leave($__internal_6101f1c59ced5463152ba8a2bd979dcf84aaea7699318fc6f2e5b0ed010274f1_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ce680a7f306593c949168f342107405aa74c985d2deeabfeac8f4a943110a333 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce680a7f306593c949168f342107405aa74c985d2deeabfeac8f4a943110a333->enter($__internal_ce680a7f306593c949168f342107405aa74c985d2deeabfeac8f4a943110a333_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ea8402184e187531264c82c11e031c3305055c73e47406bbe0f581cd6ba3aee1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea8402184e187531264c82c11e031c3305055c73e47406bbe0f581cd6ba3aee1->enter($__internal_ea8402184e187531264c82c11e031c3305055c73e47406bbe0f581cd6ba3aee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "  <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/index.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
 ";
        
        $__internal_ea8402184e187531264c82c11e031c3305055c73e47406bbe0f581cd6ba3aee1->leave($__internal_ea8402184e187531264c82c11e031c3305055c73e47406bbe0f581cd6ba3aee1_prof);

        
        $__internal_ce680a7f306593c949168f342107405aa74c985d2deeabfeac8f4a943110a333->leave($__internal_ce680a7f306593c949168f342107405aa74c985d2deeabfeac8f4a943110a333_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_06e895cfbbd99c7d4d37d9a2cf09d4f0d9f3c5988c431c53c959cf90fc0f04b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06e895cfbbd99c7d4d37d9a2cf09d4f0d9f3c5988c431c53c959cf90fc0f04b5->enter($__internal_06e895cfbbd99c7d4d37d9a2cf09d4f0d9f3c5988c431c53c959cf90fc0f04b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_02a76fbadaf5f56ac7f3423a0a1311fde5a7a9ca441955514a165ed6d9398206 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02a76fbadaf5f56ac7f3423a0a1311fde5a7a9ca441955514a165ed6d9398206->enter($__internal_02a76fbadaf5f56ac7f3423a0a1311fde5a7a9ca441955514a165ed6d9398206_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_02a76fbadaf5f56ac7f3423a0a1311fde5a7a9ca441955514a165ed6d9398206->leave($__internal_02a76fbadaf5f56ac7f3423a0a1311fde5a7a9ca441955514a165ed6d9398206_prof);

        
        $__internal_06e895cfbbd99c7d4d37d9a2cf09d4f0d9f3c5988c431c53c959cf90fc0f04b5->leave($__internal_06e895cfbbd99c7d4d37d9a2cf09d4f0d9f3c5988c431c53c959cf90fc0f04b5_prof);

    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_379caa37a783b70c55fbd67a58e718d21662c735e17d3efe9fece4e6bd70b9c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_379caa37a783b70c55fbd67a58e718d21662c735e17d3efe9fece4e6bd70b9c5->enter($__internal_379caa37a783b70c55fbd67a58e718d21662c735e17d3efe9fece4e6bd70b9c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ef8b0e4ff3476b08a2bb653807b2f791520b109458b58f10dede2d808223bae4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef8b0e4ff3476b08a2bb653807b2f791520b109458b58f10dede2d808223bae4->enter($__internal_ef8b0e4ff3476b08a2bb653807b2f791520b109458b58f10dede2d808223bae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ef8b0e4ff3476b08a2bb653807b2f791520b109458b58f10dede2d808223bae4->leave($__internal_ef8b0e4ff3476b08a2bb653807b2f791520b109458b58f10dede2d808223bae4_prof);

        
        $__internal_379caa37a783b70c55fbd67a58e718d21662c735e17d3efe9fece4e6bd70b9c5->leave($__internal_379caa37a783b70c55fbd67a58e718d21662c735e17d3efe9fece4e6bd70b9c5_prof);

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
{% endblock %}", "MALrmBundle:Accueil:index.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\LrmBundle/Resources/views/Accueil/index.html.twig");
    }
}
