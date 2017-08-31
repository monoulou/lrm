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
        $__internal_bd0dabe3bd23d92a66149a020ccf3ff2e2243f840e68a5c36af4ea3661755491 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd0dabe3bd23d92a66149a020ccf3ff2e2243f840e68a5c36af4ea3661755491->enter($__internal_bd0dabe3bd23d92a66149a020ccf3ff2e2243f840e68a5c36af4ea3661755491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MAUserBundle:Resetting:check_email.html.twig"));

        $__internal_de3759acff129069cb7fb3bb389bc0bd3f34d203d4b32de774d8001fa0ed7f15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de3759acff129069cb7fb3bb389bc0bd3f34d203d4b32de774d8001fa0ed7f15->enter($__internal_de3759acff129069cb7fb3bb389bc0bd3f34d203d4b32de774d8001fa0ed7f15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MAUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd0dabe3bd23d92a66149a020ccf3ff2e2243f840e68a5c36af4ea3661755491->leave($__internal_bd0dabe3bd23d92a66149a020ccf3ff2e2243f840e68a5c36af4ea3661755491_prof);

        
        $__internal_de3759acff129069cb7fb3bb389bc0bd3f34d203d4b32de774d8001fa0ed7f15->leave($__internal_de3759acff129069cb7fb3bb389bc0bd3f34d203d4b32de774d8001fa0ed7f15_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_463766e148369ae100e81e170eb524d23d060abe27adde1cb155632a5f50fefd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_463766e148369ae100e81e170eb524d23d060abe27adde1cb155632a5f50fefd->enter($__internal_463766e148369ae100e81e170eb524d23d060abe27adde1cb155632a5f50fefd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_cf5d2807bc5c67f67a07fdebc4f50e77f43c51227ee9d2dcb51dcdd5fa04d9b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf5d2807bc5c67f67a07fdebc4f50e77f43c51227ee9d2dcb51dcdd5fa04d9b5->enter($__internal_cf5d2807bc5c67f67a07fdebc4f50e77f43c51227ee9d2dcb51dcdd5fa04d9b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/check_email.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
";
        
        $__internal_cf5d2807bc5c67f67a07fdebc4f50e77f43c51227ee9d2dcb51dcdd5fa04d9b5->leave($__internal_cf5d2807bc5c67f67a07fdebc4f50e77f43c51227ee9d2dcb51dcdd5fa04d9b5_prof);

        
        $__internal_463766e148369ae100e81e170eb524d23d060abe27adde1cb155632a5f50fefd->leave($__internal_463766e148369ae100e81e170eb524d23d060abe27adde1cb155632a5f50fefd_prof);

    }

    // line 9
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9c5ebe4f6d8e92b5f2c5f599775d85803beac5fae46eb08f372f1365685d0f87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c5ebe4f6d8e92b5f2c5f599775d85803beac5fae46eb08f372f1365685d0f87->enter($__internal_9c5ebe4f6d8e92b5f2c5f599775d85803beac5fae46eb08f372f1365685d0f87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_42caac55d895ed8010300d2a44970189661c76fab0bc909e44cd560a6ed03555 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42caac55d895ed8010300d2a44970189661c76fab0bc909e44cd560a6ed03555->enter($__internal_42caac55d895ed8010300d2a44970189661c76fab0bc909e44cd560a6ed03555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_42caac55d895ed8010300d2a44970189661c76fab0bc909e44cd560a6ed03555->leave($__internal_42caac55d895ed8010300d2a44970189661c76fab0bc909e44cd560a6ed03555_prof);

        
        $__internal_9c5ebe4f6d8e92b5f2c5f599775d85803beac5fae46eb08f372f1365685d0f87->leave($__internal_9c5ebe4f6d8e92b5f2c5f599775d85803beac5fae46eb08f372f1365685d0f87_prof);

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
