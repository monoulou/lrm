<?php

/* MAUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_c84b4ab60fc2a41e0d272cff2611c02cfe2f85d0a8e1e3f99793dff9e8158908 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "MAUserBundle:Resetting:check_email.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5410db24d92f58b5f14b2cc369cb315b477650169aa2f07a8eff7e32d4eba91f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5410db24d92f58b5f14b2cc369cb315b477650169aa2f07a8eff7e32d4eba91f->enter($__internal_5410db24d92f58b5f14b2cc369cb315b477650169aa2f07a8eff7e32d4eba91f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MAUserBundle:Resetting:check_email.html.twig"));

        $__internal_6713866526305ad645b91e5dfa1871adb66cf1c87785b077f35a99701264b449 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6713866526305ad645b91e5dfa1871adb66cf1c87785b077f35a99701264b449->enter($__internal_6713866526305ad645b91e5dfa1871adb66cf1c87785b077f35a99701264b449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MAUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5410db24d92f58b5f14b2cc369cb315b477650169aa2f07a8eff7e32d4eba91f->leave($__internal_5410db24d92f58b5f14b2cc369cb315b477650169aa2f07a8eff7e32d4eba91f_prof);

        
        $__internal_6713866526305ad645b91e5dfa1871adb66cf1c87785b077f35a99701264b449->leave($__internal_6713866526305ad645b91e5dfa1871adb66cf1c87785b077f35a99701264b449_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a688d838eced6c3f8f033d81b0777d4a6406a4009ab6a42dc1245eefffca5e69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a688d838eced6c3f8f033d81b0777d4a6406a4009ab6a42dc1245eefffca5e69->enter($__internal_a688d838eced6c3f8f033d81b0777d4a6406a4009ab6a42dc1245eefffca5e69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_de6df1d9a3c9d9065f6a4de1832862960d5399e60635a62e7cb0827b6fff14e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de6df1d9a3c9d9065f6a4de1832862960d5399e60635a62e7cb0827b6fff14e4->enter($__internal_de6df1d9a3c9d9065f6a4de1832862960d5399e60635a62e7cb0827b6fff14e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/check_email.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
";
        
        $__internal_de6df1d9a3c9d9065f6a4de1832862960d5399e60635a62e7cb0827b6fff14e4->leave($__internal_de6df1d9a3c9d9065f6a4de1832862960d5399e60635a62e7cb0827b6fff14e4_prof);

        
        $__internal_a688d838eced6c3f8f033d81b0777d4a6406a4009ab6a42dc1245eefffca5e69->leave($__internal_a688d838eced6c3f8f033d81b0777d4a6406a4009ab6a42dc1245eefffca5e69_prof);

    }

    // line 9
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0852e7826dc026a929beb7859f9a897dc7c1f3e0b4f6f74782a58838787c6810 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0852e7826dc026a929beb7859f9a897dc7c1f3e0b4f6f74782a58838787c6810->enter($__internal_0852e7826dc026a929beb7859f9a897dc7c1f3e0b4f6f74782a58838787c6810_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a51938d5e543f0bd3a44b5dd9e321d0a339c823ce3b3c34c399ef6a600c0772d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a51938d5e543f0bd3a44b5dd9e321d0a339c823ce3b3c34c399ef6a600c0772d->enter($__internal_a51938d5e543f0bd3a44b5dd9e321d0a339c823ce3b3c34c399ef6a600c0772d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 10
        echo "    <div class=\"container-fluid\" id=\"check_email_container\">
        <div class=\"row\">
            <div class=\"col-lg-offset-9 col-lg-3\">
                <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "\">Retourner vers la page de connexion</a>
            </div>
        </div>
        <div class=\"row\">
            <h3 id=\"check_email_title\">RE-INITIALISATION DU MOT DE PASSE</h3><hr style=\"border: 1px solid darkgray; margin-left: 25px; margin-right: 25px \">
        </div>
        <div class=\"row\" id=\"message_check_email\">
            ";
        // line 20
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
        </div>
    </div>
";
        
        $__internal_a51938d5e543f0bd3a44b5dd9e321d0a339c823ce3b3c34c399ef6a600c0772d->leave($__internal_a51938d5e543f0bd3a44b5dd9e321d0a339c823ce3b3c34c399ef6a600c0772d_prof);

        
        $__internal_0852e7826dc026a929beb7859f9a897dc7c1f3e0b4f6f74782a58838787c6810->leave($__internal_0852e7826dc026a929beb7859f9a897dc7c1f3e0b4f6f74782a58838787c6810_prof);

    }

    public function getTemplateName()
    {
        return "MAUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 20,  77 => 13,  72 => 10,  63 => 9,  50 => 6,  41 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block stylesheets %}
    <link href=\"{{ asset ('css/check_email.css') }}\" rel='stylesheet' type='text/css' />
{% endblock %}

{% block fos_user_content %}
    <div class=\"container-fluid\" id=\"check_email_container\">
        <div class=\"row\">
            <div class=\"col-lg-offset-9 col-lg-3\">
                <a href=\"{{ path('fos_user_security_login') }}\">Retourner vers la page de connexion</a>
            </div>
        </div>
        <div class=\"row\">
            <h3 id=\"check_email_title\">RE-INITIALISATION DU MOT DE PASSE</h3><hr style=\"border: 1px solid darkgray; margin-left: 25px; margin-right: 25px \">
        </div>
        <div class=\"row\" id=\"message_check_email\">
            {{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
        </div>
    </div>
{% endblock %}", "MAUserBundle:Resetting:check_email.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\UserBundle/Resources/views/Resetting/check_email.html.twig");
    }
}
