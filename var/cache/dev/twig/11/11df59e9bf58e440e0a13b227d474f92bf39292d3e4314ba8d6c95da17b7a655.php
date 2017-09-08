<?php

/* @MAUser/Registration/confirmed.html.twig */
class __TwigTemplate_6c005dd74dc74a06e62efee7778a2ee0f40fa4e37829f2e1908fe7ce7633309f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@MAUser/Registration/confirmed.html.twig", 1);
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
        $__internal_3ca1c8d93c4f4de9f62509036688269a5e7909f1fc07ba476be17fa292cf1078 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ca1c8d93c4f4de9f62509036688269a5e7909f1fc07ba476be17fa292cf1078->enter($__internal_3ca1c8d93c4f4de9f62509036688269a5e7909f1fc07ba476be17fa292cf1078_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MAUser/Registration/confirmed.html.twig"));

        $__internal_58eaca171d4ee96886bf91f724564222f32a64653608415881e651a0cd4f8bb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58eaca171d4ee96886bf91f724564222f32a64653608415881e651a0cd4f8bb8->enter($__internal_58eaca171d4ee96886bf91f724564222f32a64653608415881e651a0cd4f8bb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MAUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ca1c8d93c4f4de9f62509036688269a5e7909f1fc07ba476be17fa292cf1078->leave($__internal_3ca1c8d93c4f4de9f62509036688269a5e7909f1fc07ba476be17fa292cf1078_prof);

        
        $__internal_58eaca171d4ee96886bf91f724564222f32a64653608415881e651a0cd4f8bb8->leave($__internal_58eaca171d4ee96886bf91f724564222f32a64653608415881e651a0cd4f8bb8_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3e699ce103262407011daedb0dc51849434308d989cd73fae0b53500e859dd1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e699ce103262407011daedb0dc51849434308d989cd73fae0b53500e859dd1f->enter($__internal_3e699ce103262407011daedb0dc51849434308d989cd73fae0b53500e859dd1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_40be8b37bcb22fac75333248c769cdad7b3f3e76c208d7cf1a78a8ee469b71c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40be8b37bcb22fac75333248c769cdad7b3f3e76c208d7cf1a78a8ee469b71c5->enter($__internal_40be8b37bcb22fac75333248c769cdad7b3f3e76c208d7cf1a78a8ee469b71c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/confirmed.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
";
        
        $__internal_40be8b37bcb22fac75333248c769cdad7b3f3e76c208d7cf1a78a8ee469b71c5->leave($__internal_40be8b37bcb22fac75333248c769cdad7b3f3e76c208d7cf1a78a8ee469b71c5_prof);

        
        $__internal_3e699ce103262407011daedb0dc51849434308d989cd73fae0b53500e859dd1f->leave($__internal_3e699ce103262407011daedb0dc51849434308d989cd73fae0b53500e859dd1f_prof);

    }

    // line 9
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_20e7d82834921a43bc4a886236b6e3d17ed33bf30d415b5238668874e071f980 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20e7d82834921a43bc4a886236b6e3d17ed33bf30d415b5238668874e071f980->enter($__internal_20e7d82834921a43bc4a886236b6e3d17ed33bf30d415b5238668874e071f980_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_314b1570622f1a7239394148e0f94744e53167a7ceb661d935a703fea5fcda99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_314b1570622f1a7239394148e0f94744e53167a7ceb661d935a703fea5fcda99->enter($__internal_314b1570622f1a7239394148e0f94744e53167a7ceb661d935a703fea5fcda99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 10
        echo "    <div class=\"container-fluid\" id=\"confirmed_container\">
        <div class=\"row\">
            <div class=\"col-lg-offset-10 col-lg-2\">
                <p><a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\">Déconnecter l'utilisateur</a></p>
            </div>
        </div>
        <div class=\"row\">
            <h3 style=\"margin-left: 15px\">CONFIRMATION DE CREATION DE COMPTE</h3><hr style=\"border: 1px solid darkgray; margin-left: 25px; margin-right: 25px \">
        </div>
        <div class=\"row\">
            <div class=\"col-lg-5\" id=\"confirmed_message\">
            <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
            ";
        // line 22
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 23
            echo "                <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
            ";
        }
        // line 25
        echo "            </div>
        </div>
    </div>
";
        
        $__internal_314b1570622f1a7239394148e0f94744e53167a7ceb661d935a703fea5fcda99->leave($__internal_314b1570622f1a7239394148e0f94744e53167a7ceb661d935a703fea5fcda99_prof);

        
        $__internal_20e7d82834921a43bc4a886236b6e3d17ed33bf30d415b5238668874e071f980->leave($__internal_20e7d82834921a43bc4a886236b6e3d17ed33bf30d415b5238668874e071f980_prof);

    }

    public function getTemplateName()
    {
        return "@MAUser/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 25,  94 => 23,  92 => 22,  88 => 21,  77 => 13,  72 => 10,  63 => 9,  50 => 6,  41 => 5,  11 => 1,);
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
<link href=\"{{ asset ('css/confirmed.css') }}\" rel='stylesheet' type='text/css' />
{% endblock %}

{% block fos_user_content %}
    <div class=\"container-fluid\" id=\"confirmed_container\">
        <div class=\"row\">
            <div class=\"col-lg-offset-10 col-lg-2\">
                <p><a href=\"{{ path('fos_user_security_logout') }}\">Déconnecter l'utilisateur</a></p>
            </div>
        </div>
        <div class=\"row\">
            <h3 style=\"margin-left: 15px\">CONFIRMATION DE CREATION DE COMPTE</h3><hr style=\"border: 1px solid darkgray; margin-left: 25px; margin-right: 25px \">
        </div>
        <div class=\"row\">
            <div class=\"col-lg-5\" id=\"confirmed_message\">
            <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
            {% if targetUrl %}
                <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
            {% endif %}
            </div>
        </div>
    </div>
{% endblock fos_user_content %}", "@MAUser/Registration/confirmed.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\UserBundle\\Resources\\views\\Registration\\confirmed.html.twig");
    }
}
