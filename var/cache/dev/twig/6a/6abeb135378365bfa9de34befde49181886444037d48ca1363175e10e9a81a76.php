<?php

/* @MAUser/Registration/register_content.html.twig */
class __TwigTemplate_aa9711748b73a446e467f975b795529128b076200b11825e05a5b357192ba4df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4646554b96651cf350e5d196c696f3d930591c9678fa0cf7ee272057bca66836 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4646554b96651cf350e5d196c696f3d930591c9678fa0cf7ee272057bca66836->enter($__internal_4646554b96651cf350e5d196c696f3d930591c9678fa0cf7ee272057bca66836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MAUser/Registration/register_content.html.twig"));

        $__internal_460948748b9abd833850a0f37713fc5ada15b9db41ee876b1540c47390550a1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_460948748b9abd833850a0f37713fc5ada15b9db41ee876b1540c47390550a1c->enter($__internal_460948748b9abd833850a0f37713fc5ada15b9db41ee876b1540c47390550a1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MAUser/Registration/register_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 6
        echo "
<div class=\"container-fluid\" id=\"register_container\">
    <div class=\"row\">
        <div class=\"col-lg-offset-8\">
            ";
        // line 10
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 11
            echo "                Connecté en tant que ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "--<a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a>-- Revenir à <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ma_lrm_accueil");
            echo "\">l'accueil</a>--
            ";
        } else {
            // line 13
            echo "                <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">Connexion</a>
            ";
        }
        // line 15
        echo "        </div>
    </div>
    <div class=\"row\">
        <h3 id=\"registration_title\">AJOUT D'UN UTILISATEUR</h3><hr style=\"border: 1px solid darkgray; margin-left: 25px; margin-right: 25px \">
    </div>
    <div class=\"row\">
        <div class=\"col-lg-3\" id=\"form_box_registration\">
            ";
        // line 22
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "
            ";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            <div>
                <input type=\"submit\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
            </div>
            ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
    </div>
</div>
";
        
        $__internal_4646554b96651cf350e5d196c696f3d930591c9678fa0cf7ee272057bca66836->leave($__internal_4646554b96651cf350e5d196c696f3d930591c9678fa0cf7ee272057bca66836_prof);

        
        $__internal_460948748b9abd833850a0f37713fc5ada15b9db41ee876b1540c47390550a1c->leave($__internal_460948748b9abd833850a0f37713fc5ada15b9db41ee876b1540c47390550a1c_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_11c1258501bdcb71f160fde1c7121a4569cdd8a8125a4094729bd89cd295f0bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11c1258501bdcb71f160fde1c7121a4569cdd8a8125a4094729bd89cd295f0bb->enter($__internal_11c1258501bdcb71f160fde1c7121a4569cdd8a8125a4094729bd89cd295f0bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_c817910c511c22490008c075c77210332daee023e7140fac9713c9b298025ff3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c817910c511c22490008c075c77210332daee023e7140fac9713c9b298025ff3->enter($__internal_c817910c511c22490008c075c77210332daee023e7140fac9713c9b298025ff3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/register_content.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
";
        
        $__internal_c817910c511c22490008c075c77210332daee023e7140fac9713c9b298025ff3->leave($__internal_c817910c511c22490008c075c77210332daee023e7140fac9713c9b298025ff3_prof);

        
        $__internal_11c1258501bdcb71f160fde1c7121a4569cdd8a8125a4094729bd89cd295f0bb->leave($__internal_11c1258501bdcb71f160fde1c7121a4569cdd8a8125a4094729bd89cd295f0bb_prof);

    }

    public function getTemplateName()
    {
        return "@MAUser/Registration/register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 4,  93 => 3,  78 => 27,  73 => 25,  68 => 23,  64 => 22,  55 => 15,  49 => 13,  39 => 11,  37 => 10,  31 => 6,  29 => 3,  26 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

{% block stylesheets %}
    <link href=\"{{ asset ('css/register_content.css') }}\" rel='stylesheet' type='text/css' />
{% endblock %}

<div class=\"container-fluid\" id=\"register_container\">
    <div class=\"row\">
        <div class=\"col-lg-offset-8\">
            {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                Connecté en tant que {{ app.user.username }}--<a href=\"{{ path('fos_user_security_logout') }}\">Déconnexion</a>-- Revenir à <a href=\"{{ path('ma_lrm_accueil')}}\">l'accueil</a>--
            {% else %}
                <a href=\"{{ path('fos_user_security_login') }}\">Connexion</a>
            {% endif %}
        </div>
    </div>
    <div class=\"row\">
        <h3 id=\"registration_title\">AJOUT D'UN UTILISATEUR</h3><hr style=\"border: 1px solid darkgray; margin-left: 25px; margin-right: 25px \">
    </div>
    <div class=\"row\">
        <div class=\"col-lg-3\" id=\"form_box_registration\">
            {{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}
            {{ form_widget(form) }}
            <div>
                <input type=\"submit\" value=\"{{ 'registration.submit'|trans }}\" />
            </div>
            {{ form_end(form) }}
        </div>
    </div>
</div>
", "@MAUser/Registration/register_content.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\UserBundle\\Resources\\views\\Registration\\register_content.html.twig");
    }
}
