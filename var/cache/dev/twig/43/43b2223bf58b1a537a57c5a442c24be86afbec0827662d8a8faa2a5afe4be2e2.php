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
        $__internal_2400fff329cb4726ff6028e4dabbf1eef3eb7561fb1fffc9cc1bf0531ccd3506 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2400fff329cb4726ff6028e4dabbf1eef3eb7561fb1fffc9cc1bf0531ccd3506->enter($__internal_2400fff329cb4726ff6028e4dabbf1eef3eb7561fb1fffc9cc1bf0531ccd3506_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Accueil:index.html.twig"));

        $__internal_03dd0d95b766777e0dd1e6ff95d625a34079ae5ae9f5648e729831dbf463153e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03dd0d95b766777e0dd1e6ff95d625a34079ae5ae9f5648e729831dbf463153e->enter($__internal_03dd0d95b766777e0dd1e6ff95d625a34079ae5ae9f5648e729831dbf463153e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Accueil:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2400fff329cb4726ff6028e4dabbf1eef3eb7561fb1fffc9cc1bf0531ccd3506->leave($__internal_2400fff329cb4726ff6028e4dabbf1eef3eb7561fb1fffc9cc1bf0531ccd3506_prof);

        
        $__internal_03dd0d95b766777e0dd1e6ff95d625a34079ae5ae9f5648e729831dbf463153e->leave($__internal_03dd0d95b766777e0dd1e6ff95d625a34079ae5ae9f5648e729831dbf463153e_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a82f9cc88b670e5ec72a28103b789973e4ba92d1a8a41b6efc7fadac0f4999ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a82f9cc88b670e5ec72a28103b789973e4ba92d1a8a41b6efc7fadac0f4999ac->enter($__internal_a82f9cc88b670e5ec72a28103b789973e4ba92d1a8a41b6efc7fadac0f4999ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_94791fb2f83e8fb8bd5a481207f7dc9563444193cbceeb1a243a72e968987d30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94791fb2f83e8fb8bd5a481207f7dc9563444193cbceeb1a243a72e968987d30->enter($__internal_94791fb2f83e8fb8bd5a481207f7dc9563444193cbceeb1a243a72e968987d30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "  <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/index.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
 ";
        
        $__internal_94791fb2f83e8fb8bd5a481207f7dc9563444193cbceeb1a243a72e968987d30->leave($__internal_94791fb2f83e8fb8bd5a481207f7dc9563444193cbceeb1a243a72e968987d30_prof);

        
        $__internal_a82f9cc88b670e5ec72a28103b789973e4ba92d1a8a41b6efc7fadac0f4999ac->leave($__internal_a82f9cc88b670e5ec72a28103b789973e4ba92d1a8a41b6efc7fadac0f4999ac_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_e54194caeb2fbaa4d6a9ea394d12f0cea0f6b20ba4ea425a4a2d2b29bcc94fe8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e54194caeb2fbaa4d6a9ea394d12f0cea0f6b20ba4ea425a4a2d2b29bcc94fe8->enter($__internal_e54194caeb2fbaa4d6a9ea394d12f0cea0f6b20ba4ea425a4a2d2b29bcc94fe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d4e3f8819c8228c158e16fade80b7d892dd2d97a68958a33918b8a4cb7b713c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4e3f8819c8228c158e16fade80b7d892dd2d97a68958a33918b8a4cb7b713c5->enter($__internal_d4e3f8819c8228c158e16fade80b7d892dd2d97a68958a33918b8a4cb7b713c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d4e3f8819c8228c158e16fade80b7d892dd2d97a68958a33918b8a4cb7b713c5->leave($__internal_d4e3f8819c8228c158e16fade80b7d892dd2d97a68958a33918b8a4cb7b713c5_prof);

        
        $__internal_e54194caeb2fbaa4d6a9ea394d12f0cea0f6b20ba4ea425a4a2d2b29bcc94fe8->leave($__internal_e54194caeb2fbaa4d6a9ea394d12f0cea0f6b20ba4ea425a4a2d2b29bcc94fe8_prof);

    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_826c8c05ed0ca2fbba5761c0cefcfa0c04a5664177cf16ce96867b997778594d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_826c8c05ed0ca2fbba5761c0cefcfa0c04a5664177cf16ce96867b997778594d->enter($__internal_826c8c05ed0ca2fbba5761c0cefcfa0c04a5664177cf16ce96867b997778594d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_41cdc918ffa878ee999a8f94dfb4640794d369c867d1c2868b43d1546ede21ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41cdc918ffa878ee999a8f94dfb4640794d369c867d1c2868b43d1546ede21ca->enter($__internal_41cdc918ffa878ee999a8f94dfb4640794d369c867d1c2868b43d1546ede21ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_41cdc918ffa878ee999a8f94dfb4640794d369c867d1c2868b43d1546ede21ca->leave($__internal_41cdc918ffa878ee999a8f94dfb4640794d369c867d1c2868b43d1546ede21ca_prof);

        
        $__internal_826c8c05ed0ca2fbba5761c0cefcfa0c04a5664177cf16ce96867b997778594d->leave($__internal_826c8c05ed0ca2fbba5761c0cefcfa0c04a5664177cf16ce96867b997778594d_prof);

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
