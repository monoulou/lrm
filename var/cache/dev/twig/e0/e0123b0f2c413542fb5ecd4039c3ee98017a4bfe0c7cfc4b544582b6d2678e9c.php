<?php

/* @MAUser/Resetting/check_email.html.twig */
class __TwigTemplate_c8947afcd5ced558fc4cc3ec35154aff029406b1537de30bcb3164c78fcfe2aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@MAUser/Resetting/check_email.html.twig", 1);
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
        $__internal_74749686c2b67f18bfc46bab75ffaa198e45f4884c9670ecf4ca77f69424fbfe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74749686c2b67f18bfc46bab75ffaa198e45f4884c9670ecf4ca77f69424fbfe->enter($__internal_74749686c2b67f18bfc46bab75ffaa198e45f4884c9670ecf4ca77f69424fbfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MAUser/Resetting/check_email.html.twig"));

        $__internal_a0b217d482e7ca1b4ba08f39a63659962cccce4ccff1ad149dae9bb40dc2780a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0b217d482e7ca1b4ba08f39a63659962cccce4ccff1ad149dae9bb40dc2780a->enter($__internal_a0b217d482e7ca1b4ba08f39a63659962cccce4ccff1ad149dae9bb40dc2780a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MAUser/Resetting/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_74749686c2b67f18bfc46bab75ffaa198e45f4884c9670ecf4ca77f69424fbfe->leave($__internal_74749686c2b67f18bfc46bab75ffaa198e45f4884c9670ecf4ca77f69424fbfe_prof);

        
        $__internal_a0b217d482e7ca1b4ba08f39a63659962cccce4ccff1ad149dae9bb40dc2780a->leave($__internal_a0b217d482e7ca1b4ba08f39a63659962cccce4ccff1ad149dae9bb40dc2780a_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8ddca87ad7b5e28904e909c6b1aa1b11b20bf159cada60b24cd8916374558e60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ddca87ad7b5e28904e909c6b1aa1b11b20bf159cada60b24cd8916374558e60->enter($__internal_8ddca87ad7b5e28904e909c6b1aa1b11b20bf159cada60b24cd8916374558e60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_51d741394901ee43d79645d9ff148ecf35fb4125f91e675570adae2a2658cee9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51d741394901ee43d79645d9ff148ecf35fb4125f91e675570adae2a2658cee9->enter($__internal_51d741394901ee43d79645d9ff148ecf35fb4125f91e675570adae2a2658cee9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/check_email.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
";
        
        $__internal_51d741394901ee43d79645d9ff148ecf35fb4125f91e675570adae2a2658cee9->leave($__internal_51d741394901ee43d79645d9ff148ecf35fb4125f91e675570adae2a2658cee9_prof);

        
        $__internal_8ddca87ad7b5e28904e909c6b1aa1b11b20bf159cada60b24cd8916374558e60->leave($__internal_8ddca87ad7b5e28904e909c6b1aa1b11b20bf159cada60b24cd8916374558e60_prof);

    }

    // line 9
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2818cdcd623fdd683b81cb72a7e39b2b0323f107a50af3dc80f039afc6d3b001 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2818cdcd623fdd683b81cb72a7e39b2b0323f107a50af3dc80f039afc6d3b001->enter($__internal_2818cdcd623fdd683b81cb72a7e39b2b0323f107a50af3dc80f039afc6d3b001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e9dbb9b5c35a9a5488b5a1adf0f8d7d27399edd605e83c844d58bf733579ebb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9dbb9b5c35a9a5488b5a1adf0f8d7d27399edd605e83c844d58bf733579ebb3->enter($__internal_e9dbb9b5c35a9a5488b5a1adf0f8d7d27399edd605e83c844d58bf733579ebb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_e9dbb9b5c35a9a5488b5a1adf0f8d7d27399edd605e83c844d58bf733579ebb3->leave($__internal_e9dbb9b5c35a9a5488b5a1adf0f8d7d27399edd605e83c844d58bf733579ebb3_prof);

        
        $__internal_2818cdcd623fdd683b81cb72a7e39b2b0323f107a50af3dc80f039afc6d3b001->leave($__internal_2818cdcd623fdd683b81cb72a7e39b2b0323f107a50af3dc80f039afc6d3b001_prof);

    }

    public function getTemplateName()
    {
        return "@MAUser/Resetting/check_email.html.twig";
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
{% endblock %}", "@MAUser/Resetting/check_email.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\UserBundle\\Resources\\views\\Resetting\\check_email.html.twig");
    }
}
