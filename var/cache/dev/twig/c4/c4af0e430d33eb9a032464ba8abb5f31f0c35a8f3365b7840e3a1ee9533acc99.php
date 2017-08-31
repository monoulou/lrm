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
        $__internal_a16cc531fb0c9b39f7dea9d1d4aed408184f2d601d9a9b478f0aa43192b6549c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a16cc531fb0c9b39f7dea9d1d4aed408184f2d601d9a9b478f0aa43192b6549c->enter($__internal_a16cc531fb0c9b39f7dea9d1d4aed408184f2d601d9a9b478f0aa43192b6549c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MAUserBundle:Resetting:check_email.html.twig"));

        $__internal_4fddc86b9f30530f7c7913429aeafa6e4f4138fd26bcea112e149bcb30ae06c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fddc86b9f30530f7c7913429aeafa6e4f4138fd26bcea112e149bcb30ae06c3->enter($__internal_4fddc86b9f30530f7c7913429aeafa6e4f4138fd26bcea112e149bcb30ae06c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MAUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a16cc531fb0c9b39f7dea9d1d4aed408184f2d601d9a9b478f0aa43192b6549c->leave($__internal_a16cc531fb0c9b39f7dea9d1d4aed408184f2d601d9a9b478f0aa43192b6549c_prof);

        
        $__internal_4fddc86b9f30530f7c7913429aeafa6e4f4138fd26bcea112e149bcb30ae06c3->leave($__internal_4fddc86b9f30530f7c7913429aeafa6e4f4138fd26bcea112e149bcb30ae06c3_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_547af1c84199e76faca39ae549ef8f8b9b21c44eb1615bde458ac3525b572f2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_547af1c84199e76faca39ae549ef8f8b9b21c44eb1615bde458ac3525b572f2a->enter($__internal_547af1c84199e76faca39ae549ef8f8b9b21c44eb1615bde458ac3525b572f2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_400c46b94f83fc8616a849cea57a1c7f557718f46357a222e94763ed3cb9aa80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_400c46b94f83fc8616a849cea57a1c7f557718f46357a222e94763ed3cb9aa80->enter($__internal_400c46b94f83fc8616a849cea57a1c7f557718f46357a222e94763ed3cb9aa80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/check_email.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
";
        
        $__internal_400c46b94f83fc8616a849cea57a1c7f557718f46357a222e94763ed3cb9aa80->leave($__internal_400c46b94f83fc8616a849cea57a1c7f557718f46357a222e94763ed3cb9aa80_prof);

        
        $__internal_547af1c84199e76faca39ae549ef8f8b9b21c44eb1615bde458ac3525b572f2a->leave($__internal_547af1c84199e76faca39ae549ef8f8b9b21c44eb1615bde458ac3525b572f2a_prof);

    }

    // line 9
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_eaffe9a5dc8b5dcb991983dd00e9f4cad9dbc5ed22aa4f3137cd41966f31e96d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eaffe9a5dc8b5dcb991983dd00e9f4cad9dbc5ed22aa4f3137cd41966f31e96d->enter($__internal_eaffe9a5dc8b5dcb991983dd00e9f4cad9dbc5ed22aa4f3137cd41966f31e96d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_21c929e8e01c99f414caebe007cf04b1630cac0e2237fc64bf4a9e76c0717801 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21c929e8e01c99f414caebe007cf04b1630cac0e2237fc64bf4a9e76c0717801->enter($__internal_21c929e8e01c99f414caebe007cf04b1630cac0e2237fc64bf4a9e76c0717801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_21c929e8e01c99f414caebe007cf04b1630cac0e2237fc64bf4a9e76c0717801->leave($__internal_21c929e8e01c99f414caebe007cf04b1630cac0e2237fc64bf4a9e76c0717801_prof);

        
        $__internal_eaffe9a5dc8b5dcb991983dd00e9f4cad9dbc5ed22aa4f3137cd41966f31e96d->leave($__internal_eaffe9a5dc8b5dcb991983dd00e9f4cad9dbc5ed22aa4f3137cd41966f31e96d_prof);

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
